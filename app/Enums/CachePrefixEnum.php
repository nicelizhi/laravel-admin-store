<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CachePrefixEnum extends Enum
{
    const SKU_ID = "sku_id_";
    const PROD_ID = "prod_id_";
    const PROD_PROP_ID = "prod_prop_id_";
    const PROD_PROP_VALUE_ID = "prod_prop_value_";
    
    const CATEGORY_ID = "category_id_";
    const CATEGORY_PROP_ID = "category_prop_id_";

    const CONFIG_ID = "config_id_";
    const CONFIG_CODE = "config_code_";
    const CONFIG_SHOP_CODE = "config_shop_code_";

    const DOUDIAN_STORE_TOKEN = "doudian_store_token_";

    

}
