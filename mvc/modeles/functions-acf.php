<?php
function SC_get_field($selector,$post_id=false,$format_value=true,$return=false){
	if(function_exists('get_field')){
		return get_field($selector,$post_id,$format_value);
	}
	return $return;
}
function SC_the_field($selector,$post_id=false,$format_value=true,$return=''){
	echo SC_get_field($selector,$post_id,$format_value,$return);
}
function CA_get_field($selector,$post_id=false,$format_value=true,$return=''){
	return SC_get_field($selector,$post_id,$format_value,$return);
}

//gestion tableau image
function SC_get_image_field($selector,$post_id=false,$type=['thumbnail','medium','large'],$format_value=true,$return=false){
	$img = SC_get_field($selector,$post_id,$format_value,$return);
	if( is_array($img) ){
		return '<img src="'.$img['sizes']['large'].'" alt="'.$img['alt'].'">';
	}
	return $return;
}
function SC_the_image_field($selector,$post_id=false,$type=['thumbnail'],$format_value=true,$return=''){
	echo SC_get_image_field($selector,$post_id,$type,$format_value,$return);
}

function CA_get_image_field($selector,$post_id=false,$type=['thumbnail'],$format_value=true,$return=false){
    $img = CA_get_field($selector,$post_id,$format_value,$return);
    if( is_array($img) ){
        return $img['sizes']['large'];
    }
    return $return;
}
function CA_the_image_field($selector,$post_id=false,$type=['thumbnail'],$format_value=true,$return=''){
    echo CA_get_image_field($selector,$post_id,$type,$format_value,$return);
}

if(!function_exists('SC_get_field_img_responsive')){
	function SC_get_field_img_responsive($img,$param=['type'=>'thumbnail','other'=>'true']){
		$r='<img ';
		foreach($param as $key=>$val){
			if($key!='type'&&$key!='other'){
				$r.=' '.$key.'="'.$val.'"';
			}
		}
		$r.=' src="'.$img['sizes'][$param['type']].'"';
		if($param['other']=='true'){
			$r.=' srcset="'.$img['sizes']['large'].' 970w, '.$img['sizes']['medium'].' 768w" sizes="(max-width: 970px) 100vw, 970px" alt="'.$img['alt'].'"';
		}
		$r.=' width="'.$img['sizes'][$param['type'].'-width'].
			'" height="'.$img['sizes'][$param['type'].'-height'].'" data-img="'.$img['sizes']['large'].'">';
		return $r;
	}
}
if(!function_exists('SC_the_field_img_responsive')){
	function SC_the_field_img_responsive($img,$param=['type'=>'thumbnail','other'=>'true']){
		echo SC_get_field_img_responsive($img,$param);
	}
}



add_filter('comment_form_field_url', '__return_false');
