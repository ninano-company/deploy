<?php
	function AddCommasFirst( $value ) {
		if ( $value >= 1000000 ) {
			$valuesCommas = substr_replace( $value, ',', -6, 0 );
			$valuesCommas = substr_replace( $valuesCommas, ',', -3, 0 );
		} elseif ( $value >= 1000 ) {
			$valuesCommas = substr_replace( $value, ',', -3, 0);
		} else {
			$valuesCommas = $value;
		}
		return $valuesCommas;
	}

	function checkData( $data, $result ) {
		if ( $data == '' ) {
			$data = $result;
			return $data;
		} else {
			return $data;
		}
	}

	function formTableInputN( $name, $value, $min, $max, $step, $decimal, $postfix, $color, $size ){
		$form = '';
		$form .= "<input id=\"{$name}\" data-plugin=\"TouchSpin\" data-options=\"{
			min: $min,
			max: $max,
			initval: 0,
			step: $step,
			decimals: $decimal,
			boostat: 10,
			initial: $value,
			maxboostedstep: 10,
			postfix: '$postfix',
			buttondown_class: 'btn btn-$color mw-$size',
			buttonup_class: 'btn btn-$color mw-$size'
		}\" type=\"text\" name=\"{$name}\" value=\"{$value}\" class=\"text-center\" style='padding:0;'>";
		return $form;
	}

	function formTableInputListN( $name, $value, $min, $max, $step, $decimal, $postfix, $color, $size ){
		$form = '';
		$form .= "<input id=\"{$name}\" data-plugin=\"TouchSpin\" data-options=\"{
			min: $min,
			max: $max,
			initval: 0,
			step: $step,
			decimals: $decimal,
			boostat: 10,
			initial: $value,
			maxboostedstep: 10,
			postfix: '$postfix',
			buttondown_class: 'btn btn-$color mw-$size',
			buttonup_class: 'btn btn-$color mw-$size'
		}\" type=\"text\" name=\"{$name}\" value=\"{$value}\" class=\"text-center\" style='padding:0;'>";
		return $form;
	}

	function formTableInput( $type, $name, $value ){
		$form = '';
		$form .= '<input type="'.$type.'" class="form-control" name="'.$name.'" value="'.$value.'">';
		return $form;
	}

	function formTableInput_center( $type, $name, $value ){
		$form = '';
		$form .= '<input type="'.$type.'" class="form-control text-center" name="'.$name.'" value="'.$value.'" style="padding:0;">';
		return $form;
	}

	function formTableInputR( $type, $name, $value ){
		$form = '';
		$form .= '<input type="'.$type.'" class="form-control" name="'.$name.'" value="'.$value.'" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}" required>';
		return $form;
	}

  function formInput( $type, $label, $name){
    $form = '';
    $form .= '<div class="form-group">';
    $form .= '<label for="'.$name.'">'.$label.'</label>';
    $form .= '<input type="'.$type.'" class="form-control" id="'.$name.'" name="'.$name.'">';
    $form .= '</div>';
    return $form;
  }

  function formInputV( $type, $label, $name, $value){
    $form = '';
    $form .= '<div class="form-group">';
    $form .= '<label for="'.$name.'">'.$label.'</label>';
    $form .= '<input type="'.$type.'" class="form-control" id="'.$name.'" name="'.$name.'", value="'.$value.'">';
    $form .= '</div>';
    return $form;
  }

  function formInputp( $type, $label, $name, $placeholder ){
    $form = '';
    $form .= '<div class="form-group">';
    $form .= '<label for="'.$name.'">'.$label.'</label>';
    $form .= '<input type="'.$type.'" class="form-control" id="'.$name.'" name="'.$name.'" placeholder="'.$placeholder.'">';
    $form .= '</div>';
    return $form;
  }

  function formInputm( $type, $label, $name, $placeholder, $maxlength, $required ){
    $form = '';
    $form .= '<div class="form-group">';
    $form .= '<label for="'.$name.'">'.$label.'</label>';
    $form .= '<input type="'.$type.'" class="form-control" id="'.$name.'" name="'.$name.'" placeholder="'.$placeholder.'" maxlength="'.$maxlength.'" '.$required.'>';
    $form .= '</div>';
    return $form;
  }

  function formInputH( $type, $name, $value ){
    $form = '';
    $form .= '<input type="'.$type.'" id="'.$name.'" name="'.$name.'" value="'.$value.'">';
    return $form;
  }

  function formInputHorizon( $type, $name, $label, $value ){
    $form = '
    <label for="'.$name.'" class="col-sm-1 control-label m-b-sm">'.$label.'</label>
    <div class="col-sm-3 m-b-sm">
    <input type="'.$type.'" class="form-control" id="'.$name.'" name="'.$name.'" value="'.$value.'">
    </div>
    ';
    return $form;
  }

	function formInputHorizonOne( $type, $name, $label, $value ){
    $form = '
    <label for="'.$name.'" class="col-xs-3 control-label m-b-sm">'.$label.'</label>
    <div class="col-xs-7 m-b-sm">
    <input type="'.$type.'" class="form-control" id="'.$name.'" name="'.$name.'" value="'.$value.'">
    </div>
    ';
    return $form;
  }

	function formInputHorizonTimeDuring( $type, $name, $name1, $name2, $label, $value1, $value2 ){
    $form = '
    <label for="'.$name.'" class="col-xs-3 control-label m-b-sm">'.$label.'</label>
    <div class="col-xs-3 m-b-sm">
    <input type="'.$type.'" class="form-control" id="'.$name1.'" name="'.$name1.'" value="'.$value1.'">
    </div>
		<div class="col-xs-1 m-b-sm" style="margin-top:9px;">
			~
    </div>
		<div class="col-xs-3 m-b-sm">
    <input type="'.$type.'" class="form-control" id="'.$name2.'" name="'.$name2.'" value="'.$value2.'">
    </div>
    ';
    return $form;
  }

	function formInputHorizonOneN( $name, $label, $value, $min, $max, $step, $decimal, $postfix, $color, $size ){
		$form = '';
		$form .= '
		<label for="'. $name .'" class="col-xs-3 control-label m-b-sm">'. $label .'</label>
		<div class="col-xs-7 m-b-sm">
		<input id="'. $name .'" data-plugin="TouchSpin" class="text-center" data-options="{
			min: '. $min .',
			max: '. $max .',
			initval: 0,
			step: '. $step .',
			decimals: '. $decimal .',
			boostat: 10,
			initial: 50,
			maxboostedstep: 10,
			postfix: \''. $postfix .'\',
			buttondown_class: \'btn btn-'. $color .' mw-'. $size .'\',
			buttonup_class: \'btn btn-'. $color .' mw-'. $size .'\'
		}" type="text" name="'. $name .'" value="'. $value .'">
		</div>';
		return $form;
	}

	function formInputHorizonAdd( $type, $name, $label, $value, $add ){
    $form = '
    <label for="'.$name.'" class="col-sm-1 control-label m-b-sm">'.$label.'</label>
    <div class="col-sm-3 m-b-sm">
    <input type="'.$type.'" class="form-control" id="'.$name.'" name="'.$name.'" value="'.$value.'" ' . $add . '>
    </div>
    ';
    return $form;
  }

  function formInputHorizonDouble( $type, $name, $label, $value ){
    $form = '
    <label for="'.$name.'" class="col-sm-2 control-label m-b-sm">'.$label.'</label>
    <div class="col-sm-4 m-b-sm">
    <input type="'.$type.'" class="form-control" id="'.$name.'" name="'.$name.'" value="'.$value.'">
    </div>
    ';
    return $form;
  }

  function formHorizonSelects( $label, $name ){
    $form = '
    <label for="'.$name.'" class="col-sm-1 control-label m-b-sm">'.$label.'</label>
    <div class="col-sm-3 m-b-sm">
      <select class="form-control" id="'.$name.'" name="'.$name.'">
		</div>
    ';
    return $form;
  }

	function formHorizonSelectChartin( $label, $name ){
    $form = '
		<div>
    <label for="'.$name.'" class="col-sm-1 control-label m-b-sm">'.$label.'</label>
    <div class="col-sm-11 m-b-sm">
      <select class="form-control" style="width:50%;" id="'.$name.'" name="'.$name.'">
		</div>
		<br>
		</div>
		';
    return $form;
  }

	function formHorizonSelectOnes( $label, $name ){
    $form = '
    <label for="'.$name.'" class="col-xs-3 control-label m-b-sm">'.$label.'</label>
    <div class="col-xs-7 m-b-sm">
      <select class="form-control" id="'.$name.'" name="'.$name.'">
		</div>
    ';
    return $form;
  }

  function formHorizonSelecte(){
    $form = '</select></div>';
    return $form;
  }

	function formHorizonSelectLists( $label, $name ){
    $form = '
    <label for="'.$name.'" class="col-sm-2 control-label text-right" style="line-height:35px;">'.$label.'</label>
    <div class="col-sm-4">
      <select class="form-control" class="text-align-last:center;" id="'.$name.'" name="'.$name.'">
    ';
    return $form;
  }

  function formHorizonSelectListe(){
    $form = '</select></div>';
    return $form;
  }

	function formInputHorizonDis( $type, $name, $label, $value, $disabled ){
    $form = '
    <label for="'.$name.'" class="col-sm-1 control-label m-b-sm">'.$label.'</label>
    <div class="col-sm-3 m-b-sm">
    <input type="'.$type.'" class="form-control" id="'.$name.'" name="'.$name.'" value="'.$value.'" '.$disabled.'>
    </div>
    ';
    return $form;
  }

	function formInputHorizonDisAdd( $type, $name, $label, $value, $disabled, $add ){
    $form = '
    <label for="'.$name.'" class="col-sm-1 control-label m-b-sm">'.$label.'</label>
    <div class="col-sm-3 m-b-sm">
    <input type="'.$type.'" class="form-control" id="'.$name.'" name="'.$name.'" value="'.$value.'" ' . $add . ' '.$disabled.'>
    </div>
    ';
    return $form;
  }

  function formInputHorizonLink( $type, $name, $label, $value, $link, $icon ){
    $form = '
    <label for="'.$name.'" class="col-sm-1 control-label m-b-sm">'.$label.'</label>
    <div class="col-sm-2 m-b-sm">
    <input type="'.$type.'" class="form-control" id="'.$name.'" name="'.$name.'" value="'.$value.'">
    </div>
    <div class="col-sm-1 m-b-sm">
    <button type="button" class="form-control btn-primary" onclick="location.href=\''.$link.'\'">'.$icon.'</button>
    </div>
    ';
    return $form;
  }

	function formInputHorizonOnClick( $type, $name, $label, $value, $onclick, $icon ){
    $form = '
    <label for="'.$name.'" class="col-sm-1 control-label m-b-sm">'.$label.'</label>
    <div class="col-sm-2 m-b-sm">
    <input type="'.$type.'" class="form-control" id="'.$name.'" name="'.$name.'" value="'.$value.'">
    </div>
    <div class="col-sm-1 m-b-sm">
    <button type="button" class="form-control btn-primary" onclick="'.$onclick.'">'.$icon.'</button>
    </div>
    ';
    return $form;
  }

  function formInputHorizonL( $type, $name, $label, $value ){
    $form = '
    <label for="'.$name.'" class="col-sm-1 control-label m-b-sm">'.$label.'</label>
    <div class="col-sm-7 m-b-sm">
    <input type="'.$type.'" class="form-control" id="'.$name.'" name="'.$name.'" value="'.$value.'">
    </div>
    ';
    return $form;
  }

	function formInputHorizonList( $type, $name, $label, $value ){
    $form = '
    <label for="'.$name.'" class="col-sm-2 control-label text-right" style="line-height:35px;">'.$label.'</label>
    <div class="col-sm-4">
    <input type="'.$type.'" class="form-control" id="'.$name.'" name="'.$name.'" value="'.$value.'">
    </div>
    ';
    return $form;
  }

  function formTextarea( $label, $name, $row ){
    $form = '';
    $form .= '<div class="form-group">';
    $form .= '<label for="'.$name.'">'.$label.'</label>';
    $form .= '<textarea class="form-control" id="'.$name.'" name="'.$name.'" row="'.$row.'" ></textarea>';
    $form .= '</div>';
    return $form;
  }

  function formTextareap( $label, $name, $row, $placeholder, $required ){
    $form = '';
    $form .= '<div class="form-group">';
    $form .= '<label for="'.$name.'" '.$required.'>'.$label.'</label>';
    $form .= '<textarea class="form-control" id="'.$name.'" name="'.$name.'" placeholder="'.$placeholder.'" row="'.$row.'" ></textarea>';
    $form .= '</div>';
    return $form;
  }

  function formSelects( $label, $name ){
    $form = '';
    $form .= '<div class="form-group">';
    $form .= '<label for="'.$name.'">'.$label.'</label>';
    $form .= '<select class="form-control" id="'.$name.'" data-plugin="select2" name="'.$name.'" >';
    return $form;
  }

  function formOption( $value, $name ){
    $form = '';
    $form .= '<option value="'.$value.'">'.$name.'</option>';
    return $form;
  }

  function formOptions( $value, $name ){
    $form = '';
    $form .= '<option value="'.$value.'" selected>'.$name.'</option>';
    return $form;
  }

  function formSelecte(){
    $form = '';
    $form .= '</select>';
    $form .= '</div>';
    return $form;
  }

  function formRadio( $color, $label, $placeholder, $name, $value ){
    $form = '';
    $form .= '<div class="radio-'.$color.' m-b-md inlineBlock">';
    $form .= '<input type="radio" id="'.$label.'" name="'.$name.'" value="'.$value.'">';
    $form .= '<label class="mw-md btn btn-outline btn-'.$color.'" for="'.$label.'">'.$placeholder.'</label>';
    $form .= '</div>';
    return $form;
  }

  function formCheckBox( $color, $label, $placeholder, $name, $value ){
    $form = '';
    $form .= '<div class="checkbox-'.$color.' m-b-md m-r-sm inlineBlock">';
    $form .= '<input type="checkbox" id="'.$label.'" name="'.$name.'" value="'.$value.'">';
    $form .= '<label class="mw-md btn btn-outline btn-'.$color.'" for="'.$label.'">'.$placeholder.'</label>';
    $form .= '</div>';
    return $form;
  }

	function formCheckBoxSize( $color, $label, $placeholder, $name, $value, $Size, $checked ){
    $form = '';
    $form .= '<div class="checkbox-'.$color.' m-h-xs m-l-sm inlineBlock">';
    $form .= '<input type="checkbox" id="'.$label.'" style="padding:8px 6px;" name="'.$name.'" value="'.$value.'" '.$checked.'>';
    $form .= '<label class="mw-'. $Size .' btn btn-outline btn-'.$color.' text-center" for="'.$label.'" style="padding:8px 6px!important;">'.$placeholder.'</label>';
    $form .= '</div>';
    return $form;
  }

	function chartCheckboxRowHeader( $header ){
		$form = '';
		$form .= '<div class="col-xl-offset-1 col-xl-10 col-xs-12">';
		$form .= '<label class="col-md-offset-1 m-b-sm" style="font-weight:bold;"> '. $header .'</label>';
		$form .= '<div class="col-md-offset-1 col-md-10">';
		$form .= '<div class="row">';
		return $form;
	}

	function chartCheckboxRowFooter (){
		return '</div></div></div>';
	}

	function tableRow2( $td1, $td2 ){
		return '<tr><td>'. $td1 .'</td><td class="text-left">'. $td2 .'</td></tr>';
	}

	function tableRowSummary2( $td1, $td2 ){
		return '<tr><th class="text-center p-h-xs">'. $td1 .'</th><td class="text-left p-v-sm p-h-xs">'. $td2 .'</td></tr>';
	}
?>
