<?php

/**
 * 返回的优惠券活动信息
 * @author auto create
 */
class CouponActivity
{
	
	/** 
	 * 优惠券活动名称
	 **/
	public $activity_name;
	
	/** 
	 * 券面额 [单位为分]
	 **/
	public $amount;
	
	/** 
	 * 适用类目
	 **/
	public $applicable_categories;
	
	/** 
	 * 优惠券领取渠道
	 **/
	public $apply_channels;
	
	/** 
	 * [减至券特有]优惠件数，限制最多优惠N件，值为-1代表不限制优惠件数 [单位为整数]
	 **/
	public $count;
	
	/** 
	 * 优惠券活动描述，不超过100个中文字符
	 **/
	public $description;
	
	/** 
	 * 自定义的优惠券使用详情(支持多条)
	 **/
	public $details;
	
	/** 
	 * 优惠券优惠类型 [fullReduce:满减券;reduceTo:减至券，即一口价券]
	 **/
	public $discount_type;
	
	/** 
	 * 活动结束时间，时间戳[ms单位]
	 **/
	public $end_time;
	
	/** 
	 * 通用限购信息，-1为不限制，默认为不限制
	 **/
	public $limit_info;
	
	/** 
	 * 优惠券logo url，设置匿名券时为必传参数
	 **/
	public $logo_url;
	
	/** 
	 * 商家活动id
	 **/
	public $out_act_id;
	
	/** 
	 * 优惠券适用范围 [rangeShop:店铺券;rangeItem:商品;rangeCategory:品类券]
	 **/
	public $range_type;
	
	/** 
	 * 优惠券发放方式 [anonymous:匿名券;registered:记名券]
	 **/
	public $send_type;
	
	/** 
	 * 参加活动的渠道店ids
	 **/
	public $shop_ids;
	
	/** 
	 * [减至券特有]件数门槛，值为-1代表无门槛 [单位为整数]
	 **/
	public $start_count;
	
	/** 
	 * [满减券特有，券类型为满减券时为必传参数]金额门槛，值为-1代表无门槛 [单位为分]
	 **/
	public $start_fee;
	
	/** 
	 * 活动开始时间，时间戳[ms单位]
	 **/
	public $start_time;
	
	/** 
	 * 优惠适用场景:APP|POS|POS+APP 分别对应的值为1|2|1,2
	 **/
	public $terminals;
	
	/** 
	 * 领取后N日有效；如果设置了该值，则不需要设置优惠券的开始时间和结束时间 [有效期截止至领取日期+N天的23:59:59。例券设置有效期领取后5天有效，2018.1.1领取的券，有效期截止至2018.1.6 23:59:59； 例券设置有效期领取后0天有效，2018.1.1领取的券，有效期截止至2018.1.1 23:59:59]
	 **/
	public $valid_days;	
}
?>