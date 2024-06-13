<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$output = '<div class="table-responsive">';
	$total = 0;

	$output .= '<table class="table table-bordered table-hover table-striped">';
	$output .= '<thead>';
		$output .= '<tr>';
			$output .= '<th style="text-align: center; vertical-align: middle;">';
				$output .= '<img src="images/creative-syntax.png" style="width:128px;">';
				$output .= '<h4><strong>Creative Syntax Sloutions</strong></h4>';
				$output .= '<label><i>Innovative & Effective</i></label>';
			$output .= '</th>';
			$output .= '<th style="vertical-align: middle;"><br/><i class="glyphicon glyphicon-list-alt"></i> CSQ/'.rand(1234,9999).'<br/><i class="glyphicon glyphicon-calendar"></i> '. Date('d-m-Y') .'</th>';
		$output .= '</tr>';
		$output .= '<tr style="background-color:#169687; color:#fff;">';
			$output .= '<th>Your Selected Requirements</th>';
			$output .= '<th style="width:160px;">Estimated Cost</th>';
		$output .= '</tr>';
	$output .= '</thead>';

	$output .= '<tbody>';

	if(isset($_POST['project_type']) && !empty($_POST['project_type'])) {
		$output .= '<tr>';
		$project = trim($_POST['project_type']);
		$projectExp = explode('_', $project);
		if( !empty($projectExp) ) {
			$projectText = trim(ucfirst($projectExp[1]));
			$projectValue = trim($projectExp[2]);

			$output .= '<td colspan="2">';
				$output .= '<h4><i class="glyphicon glyphicon-bookmark"></i> '.$projectText.'</h4>';
			$output .= '</td>';
		}
		$output .= '</tr>';
	}
	
	
	if( isset($_POST['application']) && !empty($_POST['application']) ) {
		foreach($_POST['application'] as $v) {
			$applicationExp = explode('_', $v);
			if( !empty($applicationExp) ) {
				$applicationText = trim(ucfirst($applicationExp[1]));
				$applicationValue = trim($applicationExp[2]);
				if(isset($projectValue)) {
					$applicationCost = (($projectValue * $applicationValue) / 100);
					$total = $total + $applicationCost;

					$output .= '<tr>';
						$output .= '<td>';
							$output .= '<i class="glyphicon glyphicon-triangle-right"></i> '.$applicationText;
						$output .= '</td>';
						$output .= '<td>';
							$output .= 'Rs.' . $applicationCost;
						$output .= '</td>';
					$output .= '</tr>';
				}
			}
		}
	}


	if( isset($_POST['integration']) && !empty($_POST['integration']) ) {
		foreach($_POST['integration'] as $v) {
			$integrationExp = explode('_', $v);
			if( !empty($integrationExp) ) {
				$integrationText = trim(ucfirst($integrationExp[1]));
				$integrationValue = trim($integrationExp[2]);
				$total = $total + $integrationValue;
					
				$output .= '<tr>';
					$output .= '<td>';
						if($integrationValue == 0) {
							$output .= '<i class="glyphicon glyphicon-triangle-right"></i> '.$integrationText . ' (Free)';
						} else {
							$output .= '<i class="glyphicon glyphicon-triangle-right"></i> '.$integrationText;
						}
					$output .= '</td>';
					$output .= '<td>';
						$output .= 'Rs.' . $integrationValue;
					$output .= '</td>';
				$output .= '</tr>';
			}
		}
	}


	if( isset($_POST['seo']) && !empty($_POST['seo']) ) {
		foreach($_POST['seo'] as $v) {
			$seoExp = explode('_', $v);
			if( !empty($seoExp) ) {
				$seoText = trim(ucfirst($seoExp[1]));
				$seoValue = trim($seoExp[2]);
				$total = $total + $seoValue;
					
				$output .= '<tr>';
					$output .= '<td>';
						if($seoValue == 0) {
							$output .= '<i class="glyphicon glyphicon-triangle-right"></i> '.$seoText . ' (Free)';
						} else {
							$output .= '<i class="glyphicon glyphicon-triangle-right"></i> '.$seoText;
						}
					$output .= '</td>';
					$output .= '<td>';
						$output .= 'Rs.' . $seoValue;
					$output .= '</td>';
				$output .= '</tr>';
			}
		}
	}


	if( isset($_POST['uiux']) && !empty($_POST['uiux']) ) {
		foreach($_POST['uiux'] as $v) {
			$uiuxExp = explode('_', $v);
			if( !empty($uiuxExp) ) {
				$uiuxText = trim(ucfirst($uiuxExp[1]));
				$uiuxValue = trim($uiuxExp[2]);
				$total = $total + $uiuxValue;
					
				$output .= '<tr>';
					$output .= '<td>';
						if($uiuxValue == 0) {
							$output .= '<i class="glyphicon glyphicon-triangle-right"></i> '.$uiuxText . ' (Free)';
						} else {
							$output .= '<i class="glyphicon glyphicon-triangle-right"></i> '.$uiuxText;
						}
					$output .= '</td>';
					$output .= '<td>';
						$output .= 'Rs.' . $uiuxValue;
					$output .= '</td>';
				$output .= '</tr>';
			}
		}
	}


	if(isset($_POST['maintaince']) && !empty($_POST['maintaince'])) {
		$output .= '<tr>';
		$maintaince = trim($_POST['maintaince']);
		$maintainceExp = explode('_', $maintaince);
		if( !empty($maintainceExp) ) {
			$maintainceText = trim(ucfirst($maintainceExp[1]));
			$maintainceValue = trim($maintainceExp[2]);

			$output .= '<td>';
				$output .= '<i class="glyphicon glyphicon-triangle-right"></i> '.'Maintaince For '.$maintainceText;
			$output .= '</td>';
			$output .= '<td>';
				$output .= 'Rs.' . $maintainceValue;
			$output .= '</td>';
		}
		$output .= '</tr>';
	}

	if(isset($_POST['extra']) && !empty($_POST['extra'])) {
		$output .= '<tr>';
		$extra = trim($_POST['extra']);
			$output .= '<td colspan="2">';
				$output .= '<i class="glyphicon glyphicon-star"></i> '.'<strong>Your additional requirements - </strong>';
			$output .= '</td>';
		$output .= '</tr>';
		$output .= '<tr>';
			$output .= '<td>';
				$output .= $extra;
			$output .= '</td>';
			$output .= '<td>';
				$output .= '-- --';
			$output .= '</td>';
		$output .= '</tr>';
	}

	$output .= '<tr style="background-color:#e3e3e3;">';
		$output .= '<th style="text-align:right;">Total Estimated Quotation Cost</th>';
		$output .= '<th>Rs.'. $total .'</th>';
	$output .= '</tr>';

	$output .= '<tr>';
		$output .= '<td colspan="2">**Its a approximation value of your requirements. The quotation amount may be increase or decrease 10% - 15% after process your exact requirements.<br/><strong>Note : </strong>This Quotation will valid upto 30 days from the creation date.<br/><b>So, Please contact & discuss with us about your requirements.</b></th>';
	$output .= '</tr>';

	$output .= '</tbody>';


	$output .= '<tfoot>';
		$output .= '<tr>';
			$output .= '<td>';
				$output .= '<br/>';
				$output .= '<label><strong>For Any Enquiry - Contact Us:</strong></label>';
				$output .= '<br/><i class="glyphicon glyphicon-envelope"></i> creativesyntaxsolutions@gmail.com';
				$output .= '<br/><i class="glyphicon glyphicon-phone"></i> +91 9674116428';
				$output .= '<br/><i class="glyphicon glyphicon-globe"></i> www.creativesyntax.in';
			$output .= '</td>';
			$output .= '<td style="vertical-align:middle;"><label><strong>Thankyou</strong></label></td>';
		$output .= '</tr>';
		$output .= '<tr>';
			$output .= '<td colspan="2"><i>We create your dream within your budget.</i></td>';
		$output .= '</tr>';
	$output .= '</tfoot>';


	$output .= '</table>';
	$output .= '</div>';
	echo trim($output);

}
?>