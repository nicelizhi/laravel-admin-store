<?php

namespace App\Console\Commands\Category\TM;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class Get extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'category:TM:get:online {store} {cid} {data?}';

    private $_field="pid,name,must,multi,prop_values,prop_values,is_key_prop,is_sale_prop,is_color_prop,is_input_prop,is_item_prop,status,child_template,sort_order,is_allow_alias,features,is_taosir,taosir_do,is_material,material_do";

    private $_field2 = "cid,parent_cid,name,is_parent,sort_order,status,features";
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'TM';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //ItempropsGetRequest 分类属性内容
        $store = $this->argument('store');
        $cid = $this->argument('cid'); // 用于发货



        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->secret;

        $req = new \ItemcatsGetRequest();
        $req->setFields($this->_field2);
        $req->setCids($cid);
        $resp = $c->execute($req, $store->token);
        var_dump($resp);
        if (!property_exists($resp, 'item_cats')) {
            //todo 
            return false;
        }
        var_dump($resp);

        
    }

    public function getCategoryProp($cid, $store) {
        $c = new \TopClient();
        $c->appkey = $store->key;
        $c->secretKey = $store->secret;

        $req = new \ItempropsGetRequest();
        $req->setFields($this->_field);
        $req->setCid($cid);
        $resp = $c->execute($req, $store->token);
        //var_dump($resp);
        if (!property_exists($resp, 'item_props')) {
            //todo 
            return false;
        }

        foreach($resp->item_props->item_prop as $key=>$item) {
            $prop = \App\Models\ProdProp::where("prop_id",$item->pid)->where("shop_id",$store->id)->first();
            if(is_null($prop)) $prop = new \App\Models\ProdProp();
            $prop->shop_id = $store->id;
            $prop->prop_name = $item->name;
            $prop->rule = json_encode($item);
            $prop->prop_id = $item->pid;
            $prop->save();

            // 保存到prop_value
            foreach($item->prop_values as $kk=>$opt) {
                $propval = \App\Models\ProdPropValue::where("prop_id", $item->pid)->where("value_id",$opt->vid)->first();
                if(is_null($propval)) $propval = new \App\Models\ProdPropValue();
                $propval->value_id = $opt->value_id;
                $propval->prop_value = $opt->name;
                $propval->save();
            }

            // 保存到category prop
            $categoryProp = \App\Models\CategoryProp::where("category_id", $cid)->where("prop_id", $item->pid)->first();
            if(is_null($categoryProp)) $categoryProp = new \App\Models\CategoryProp();
            $categoryProp->category_id = $cid;
            $categoryProp->prop_id = $item->pid;
            $categoryProp->save();
        }
    }
}