<?php
class EclpIbCancelOutsideMainRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.ib.cancelOutsideMain";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                    	                   			private $outsideMainNo;
    	                        
	public function setOutsideMainNo($outsideMainNo){
		$this->outsideMainNo = $outsideMainNo;
         $this->apiParas["outsideMainNo"] = $outsideMainNo;
	}

	public function getOutsideMainNo(){
	  return $this->outsideMainNo;
	}

                        	}





        
 

