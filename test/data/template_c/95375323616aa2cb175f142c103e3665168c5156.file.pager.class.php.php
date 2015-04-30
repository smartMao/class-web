<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-30 03:17:54
         compiled from "tpl\class web\classPhoto\page\pager.class.php" */ ?>
<?php /*%%SmartyHeaderCode:29800554182c29ffae4-25379867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95375323616aa2cb175f142c103e3665168c5156' => 
    array (
      0 => 'tpl\\class web\\classPhoto\\page\\pager.class.php',
      1 => 1430355200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29800554182c29ffae4-25379867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'i' => 0,
    'this' => 0,
    'currnt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554182c2a559f2_76681569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554182c2a559f2_76681569')) {function content_554182c2a559f2_76681569($_smarty_tpl) {?>
<?php echo '<?php'; ?>
    
/*   
 * PHP分页类   
 * @package Page   
 * @Created 2013-03-27   
 * @Modify  2013-03-27   
 * @link http://www.60ie.net   
 * Example:   
       $myPage=new Pager(1300,intval($CurrentPage));   
       $pageStr= $myPage->GetPagerContent();   
       echo $pageStr;   
 */   
class Pager {    
    private $pageSize = 10;    
    private $pageIndex;    
    private $totalNum;    

    private $totalPagesCount;    

    private $pageUrl;    
    private static $_instance;    

    public function __construct($p_totalNum, $p_pageIndex, $p_pageSize = 10,$p_initNum=3,$p_initMaxNum=5) {    
        if (! isset ( $p_totalNum ) || !isset($p_pageIndex)) {    
            die ( "pager initial error" );    
        }    

        $this->totalNum = $p_totalNum;    
        $this->pageIndex = $p_pageIndex;    
        $this->pageSize = $p_pageSize;    
        $this->initNum=$p_initNum;    
        $this->initMaxNum=$p_initMaxNum;    
        $this->totalPagesCount= ceil($p_totalNum / $p_pageSize);    
        $this->pageUrl=$this->_getPageUrl();    

         $this->_initPagerLegal();    
    }    

        
  /**   
    * 获取去除page部分的当前URL字符串   
    *   
    * @return String URL字符串   
    */   
  private function _getPageUrl() {    
        $CurrentUrl = $_SERVER["REQUEST_URI"];    
        $arrUrl     = parse_url($CurrentUrl);    
        $urlQuery   = $arrUrl["query"];    

        if($urlQuery){    
            $urlQuery  = ereg_replace("(^|&)page=" . $this->pageIndex, "", $urlQuery);    
            $CurrentUrl = str_replace($arrUrl["query"], $urlQuery, $CurrentUrl);    

            if($urlQuery){    
                 $CurrentUrl.="&page";    
            }    
            else $CurrentUrl.="page";    

        } else {    
            $CurrentUrl.="?page";    
        }    

    return $CurrentUrl;    

  }    
  /*   
   *设置页面参数合法性   
   *@return void   
  */   
  private function _initPagerLegal()    
  {    
      if((!is_numeric($this->pageIndex)) ||  $this->pageIndex<1)    
      {    
          $this->pageIndex=1;    
      }elseif($this->pageIndex > $this->totalPagesCount)    
      {    
          $this->pageIndex=$this->totalPagesCount;    
      }    

          

  }    
//$this->pageUrl}=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
    
//<?php echo $_smarty_tpl->tpl_vars['this']->value->CurrentUrl;?>
=<?php echo $_smarty_tpl->tpl_vars['this']->value->TotalPages;?>
    
    public function GetPagerContent() {    
        $str = "<div class=\"Pagination\">";    
        //首页 上一页    
        if($this->pageIndex==1)    
        {    
            $str .="<a href='javascript:void(0)' class='tips' title='首页'>首页</a> "."\n";    
            $str .="<a href='javascript:void(0)' class='tips' title='上一页'>上一页</a> "."\n"."\n";    
        }else   
        {    
            $str .="<a href='<?php echo $_smarty_tpl->tpl_vars['this']->value->pageUrl;?>
=1' class='tips' title='首页'>首页</a> "."\n";    
                    $str .="<a href='<?php echo $_smarty_tpl->tpl_vars['this']->value->pageUrl;?>
=".($this->pageIndex-1)."' class='tips' title='上一页'>上一页</a> "."\n"."\n";    
        }    

            

        /*   

        除首末后 页面分页逻辑   

        */   
         //10页（含）以下    
         $currnt="";    
         if($this->totalPagesCount<=10)    
         {    

            for($i=1;$i<=$this->totalPagesCount;$i++)    

            {    
                       if($i==$this->pageIndex)    
                       {    $currnt=" class='current'";}    
                       else   
                       {    $currnt="";    }    
                        $str .="<a href='<?php echo $_smarty_tpl->tpl_vars['this']->value->pageUrl;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 ' <?php echo $_smarty_tpl->tpl_vars['currnt']->value;?>
>$i</a>"."\n" ;    
            }    
         }else                                //10页以上    
         {   if($this->pageIndex<3)  //当前页小于3    
             {    
                     for($i=1;$i<=3;$i++)    
                     {    
                         if($i==$this->pageIndex)    
                           {    $currnt=" class='current'";}    
                         else   
                         {    $currnt="";    }    
                        $str .="<a href='<?php echo $_smarty_tpl->tpl_vars['this']->value->pageUrl;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 ' <?php echo $_smarty_tpl->tpl_vars['currnt']->value;?>
>$i</a>"."\n" ;    
                     }    

                     $str.="<span class=\"dot\">……</span>"."\n";    

                 for($i=$this->totalPagesCount-3+1;$i<=$this->totalPagesCount;$i++)//功能1    
                 {    
                      $str .="<a href='<?php echo $_smarty_tpl->tpl_vars['this']->value->pageUrl;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' >$i</a>"."\n" ;    

                 }    
             }elseif($this->pageIndex<=5)   //   5 >= 当前页 >= 3    
             {    
                 for($i=1;$i<=($this->pageIndex+1);$i++)    
                 {    
                      if($i==$this->pageIndex)    
                       {    $currnt=" class='current'";}    
                       else   
                       {    $currnt="";    }    
                        $str .="<a href='<?php echo $_smarty_tpl->tpl_vars['this']->value->pageUrl;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 ' <?php echo $_smarty_tpl->tpl_vars['currnt']->value;?>
>$i</a>"."\n" ;    

                 }    
                 $str.="<span class=\"dot\">……</span>"."\n";    

                 for($i=$this->totalPagesCount-3+1;$i<=$this->totalPagesCount;$i++)//功能1    
                 {    
                      $str .="<a href='<?php echo $_smarty_tpl->tpl_vars['this']->value->pageUrl;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' >$i</a>"."\n" ;    

                 }    

             }elseif(5<$this->pageIndex  &&  $this->pageIndex<=$this->totalPagesCount-5 )             //当前页大于5，同时小于总页数-5    

             {    

                 for($i=1;$i<=3;$i++)    
                 {    
                     $str .="<a href='<?php echo $_smarty_tpl->tpl_vars['this']->value->pageUrl;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' >$i</a>"."\n" ;    
                 }    
                  $str.="<span class=\"dot\">……</span>";                 
                 for($i=$this->pageIndex-1 ;$i<=$this->pageIndex+1 && $i<=$this->totalPagesCount-5+1;$i++)    
                 {    
                       if($i==$this->pageIndex)    
                       {    $currnt=" class='current'";}    
                       else   
                       {    $currnt="";    }    
                        $str .="<a href='<?php echo $_smarty_tpl->tpl_vars['this']->value->pageUrl;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 ' <?php echo $_smarty_tpl->tpl_vars['currnt']->value;?>
>$i</a>"."\n" ;    
                 }    
                 $str.="<span class=\"dot\">……</span>";    

                 for($i=$this->totalPagesCount-3+1;$i<=$this->totalPagesCount;$i++)    
                 {    
                      $str .="<a href='<?php echo $_smarty_tpl->tpl_vars['this']->value->pageUrl;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' >$i</a>"."\n" ;    

                 }    
             }else   
             {    

                  for($i=1;$i<=3;$i++)    
                 {    
                     $str .="<a href='<?php echo $_smarty_tpl->tpl_vars['this']->value->pageUrl;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' >$i</a>"."\n" ;    
                 }    
                  $str.="<span class=\"dot\">……</span>"."\n";    

                  for($i=$this->totalPagesCount-5;$i<=$this->totalPagesCount;$i++)//功能1    
                 {    
                       if($i==$this->pageIndex)    
                       {    $currnt=" class='current'";}    
                       else   
                       {    $currnt="";    }    
                        $str .="<a href='<?php echo $_smarty_tpl->tpl_vars['this']->value->pageUrl;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 ' <?php echo $_smarty_tpl->tpl_vars['currnt']->value;?>
>$i</a>"."\n" ;    

                 }    
            }           

         }    

             

             
        /*   

        除首末后 页面分页逻辑结束   

        */   

        //下一页 末页    
        if($this->pageIndex==$this->totalPagesCount)    
        {       
            $str .="\n"."<a href='javascript:void(0)' class='tips' title='下一页'>下一页</a>"."\n" ;    
            $str .="<a href='javascript:void(0)' class='tips' title='末页'>末页</a>"."\n";    

                
        }else   
        {    
            $str .="\n"."<a href='<?php echo $_smarty_tpl->tpl_vars['this']->value->pageUrl;?>
=".($this->pageIndex+1)."' class='tips' title='下一页'>下一页</a> "."\n";    
            $str .="<a href='<?php echo $_smarty_tpl->tpl_vars['this']->value->pageUrl;?>
=<?php echo $_smarty_tpl->tpl_vars['this']->value->totalPagesCount;?>
' class='tips' title='末页'>末页</a> "."\n" ;    
        }           

        $str .= "</div>";    
        return $str;    
    }    

   

   
/**   
 * 获得实例   
 * @return     
 */   
//  static public function getInstance() {    
//      if (is_null ( self::$_instance )) {    
//          self::$_instance = new pager ();    
//      }    
//      return self::$_instance;    
//  }    

   
}    
<?php echo '?>'; ?>
     
  <?php }} ?>
