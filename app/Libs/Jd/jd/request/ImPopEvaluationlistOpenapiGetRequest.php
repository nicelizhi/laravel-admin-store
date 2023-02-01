<?php
class ImPopEvaluationlistOpenapiGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.im.pop.evaluationlist.openapi.get";
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
                                    	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $waiter;
                              public function setWaiter($waiter ){
                 $this->waiter=$waiter;
                 $this->apiParas["waiter"] = $waiter;
              }

              public function getWaiter(){
              	return $this->waiter;
              }
                                                                                                                                        	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $dataType;
    	                        
	public function setDataType($dataType){
		$this->dataType = $dataType;
         $this->apiParas["dataType"] = $dataType;
	}

	public function getDataType(){
	  return $this->dataType;
	}

                        	                   			private $timeNo;
    	                        
	public function setTimeNo($timeNo){
		$this->timeNo = $timeNo;
         $this->apiParas["timeNo"] = $timeNo;
	}

	public function getTimeNo(){
	  return $this->timeNo;
	}

}





        
 
