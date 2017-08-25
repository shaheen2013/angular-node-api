<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainindex extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('index');
	}	
	public function get_time_block($time){
		$temp = explode(':',$time);
		$hr = $temp[0];
		$mm = $temp[1];
		$ss = $temp[2];
		$seconds = ($hr*60*60) + ($mm * 60) + $ss;
		$type = $seconds / 900;
		$type = floor($type) + 1;
		return $type;
	}
	public function get_time_to_seconds($time){
		$temp = explode(':',$time);
		$hr = $temp[0];
		$mm = $temp[1];
		$ss = $temp[2];
		$seconds = ($hr*60*60) + ($mm * 60) + $ss;
		return $seconds;
	}
	public function get_time($i){
		//get start and end time range back
		$tabledata = array('start_time'=> '00:00:00','end_time' =>'00:15:00');
		switch($i){
			case 1:$tabledata = array('start_time'=> '00:00:00','end_time' =>'00:15:00');break;
			case 2:$tabledata = array('start_time'=> '00:15:01','end_time' =>'00:30:00');break;
			case 3:$tabledata = array('start_time'=> '00:30:01','end_time' =>'00:45:00');break;
			case 4:$tabledata = array('start_time'=> '00:45:01','end_time' =>'01:00:00');break;
			
			case 5:$tabledata = array('start_time'=> '01:00:00','end_time' =>'01:15:00');break;
			case 6:$tabledata = array('start_time'=> '01:15:01','end_time' =>'01:30:00');break;
			case 7:$tabledata = array('start_time'=> '01:30:01','end_time' =>'01:45:00');break;
			case 8:$tabledata = array('start_time'=> '01:45:01','end_time' =>'02:00:00');break;
			
			case 9:$tabledata = array('start_time'=> '02:00:00','end_time' =>'02:15:00');break;
			case 10:$tabledata = array('start_time'=> '02:15:01','end_time' =>'02:30:00');break;
			case 11:$tabledata = array('start_time'=> '02:30:01','end_time' =>'02:45:00');break;
			case 12:$tabledata = array('start_time'=> '02:45:01','end_time' =>'03:00:00');break;
			
			case 13:$tabledata = array('start_time'=> '03:00:00','end_time' =>'03:15:00');break;
			case 14:$tabledata = array('start_time'=> '03:15:01','end_time' =>'03:30:00');break;
			case 15:$tabledata = array('start_time'=> '03:30:01','end_time' =>'03:45:00');break;
			case 16:$tabledata = array('start_time'=> '03:45:01','end_time' =>'04:00:00');break;
			
			case 17:$tabledata = array('start_time'=> '04:00:00','end_time' =>'04:15:00');break;
			case 18:$tabledata = array('start_time'=> '04:15:01','end_time' =>'04:30:00');break;
			case 19:$tabledata = array('start_time'=> '04:30:01','end_time' =>'04:45:00');break;
			case 20:$tabledata = array('start_time'=> '04:45:01','end_time' =>'05:00:00');break;
			
			case 21:$tabledata = array('start_time'=> '05:00:00','end_time' =>'05:15:00');break;
			case 22:$tabledata = array('start_time'=> '05:15:01','end_time' =>'05:30:00');break;
			case 23:$tabledata = array('start_time'=> '05:30:01','end_time' =>'05:45:00');break;
			case 24:$tabledata = array('start_time'=> '05:45:01','end_time' =>'06:00:00');break;
			
			case 25:$tabledata = array('start_time'=> '06:00:00','end_time' =>'06:15:00');break;
			case 26:$tabledata = array('start_time'=> '06:15:01','end_time' =>'06:30:00');break;
			case 27:$tabledata = array('start_time'=> '06:30:01','end_time' =>'06:45:00');break;
			case 28:$tabledata = array('start_time'=> '06:45:01','end_time' =>'07:00:00');break;
			
			case 29:$tabledata = array('start_time'=> '07:00:00','end_time' =>'07:15:00');break;
			case 30:$tabledata = array('start_time'=> '07:15:01','end_time' =>'07:30:00');break;
			case 31:$tabledata = array('start_time'=> '07:30:01','end_time' =>'07:45:00');break;
			case 32:$tabledata = array('start_time'=> '07:45:01','end_time' =>'08:00:00');break;
			
			case 33:$tabledata = array('start_time'=> '08:00:00','end_time' =>'08:15:00');break;
			case 34:$tabledata = array('start_time'=> '08:15:01','end_time' =>'08:30:00');break;
			case 35:$tabledata = array('start_time'=> '08:30:01','end_time' =>'08:45:00');break;
			case 36:$tabledata = array('start_time'=> '08:45:01','end_time' =>'09:00:00');break;
			
			case 37:$tabledata = array('start_time'=> '09:00:00','end_time' =>'09:15:00');break;
			case 38:$tabledata = array('start_time'=> '09:15:01','end_time' =>'09:30:00');break;
			case 39:$tabledata = array('start_time'=> '09:30:01','end_time' =>'09:45:00');break;
			case 40:$tabledata = array('start_time'=> '09:45:01','end_time' =>'10:00:00');break;
			
			case 41:$tabledata = array('start_time'=> '10:00:00','end_time' =>'10:15:00');break;
			case 42:$tabledata = array('start_time'=> '10:15:01','end_time' =>'10:30:00');break;
			case 43:$tabledata = array('start_time'=> '10:30:01','end_time' =>'10:45:00');break;
			case 44:$tabledata = array('start_time'=> '10:45:01','end_time' =>'11:00:00');break;
			
			case 45:$tabledata = array('start_time'=> '11:00:00','end_time' =>'11:15:00');break;
			case 46:$tabledata = array('start_time'=> '11:15:01','end_time' =>'11:30:00');break;
			case 47:$tabledata = array('start_time'=> '11:30:01','end_time' =>'11:45:00');break;
			case 48:$tabledata = array('start_time'=> '11:45:01','end_time' =>'12:00:00');break;
			
			case 49:$tabledata = array('start_time'=> '12:00:00','end_time' =>'12:15:00');break;
			case 50:$tabledata = array('start_time'=> '12:15:01','end_time' =>'12:30:00');break;
			case 51:$tabledata = array('start_time'=> '12:30:01','end_time' =>'12:45:00');break;
			case 52:$tabledata = array('start_time'=> '12:45:01','end_time' =>'13:00:00');break;
			
			case 53:$tabledata = array('start_time'=> '13:00:00','end_time' =>'13:15:00');break;
			case 54:$tabledata = array('start_time'=> '13:15:01','end_time' =>'13:30:00');break;
			case 55:$tabledata = array('start_time'=> '13:30:01','end_time' =>'13:45:00');break;
			case 56:$tabledata = array('start_time'=> '13:45:01','end_time' =>'14:00:00');break;
			
			case 57:$tabledata = array('start_time'=> '14:00:00','end_time' =>'14:15:00');break;
			case 58:$tabledata = array('start_time'=> '14:15:01','end_time' =>'14:30:00');break;
			case 59:$tabledata = array('start_time'=> '14:30:01','end_time' =>'14:45:00');break;
			case 60:$tabledata = array('start_time'=> '14:45:01','end_time' =>'15:00:00');break;
			
			case 61:$tabledata = array('start_time'=> '15:00:00','end_time' =>'15:15:00');break;
			case 62:$tabledata = array('start_time'=> '15:15:01','end_time' =>'15:30:00');break;
			case 63:$tabledata = array('start_time'=> '15:30:01','end_time' =>'15:45:00');break;
			case 64:$tabledata = array('start_time'=> '15:45:01','end_time' =>'16:00:00');break;
			
			case 65:$tabledata = array('start_time'=> '16:00:00','end_time' =>'16:15:00');break;
			case 66:$tabledata = array('start_time'=> '16:15:01','end_time' =>'16:30:00');break;
			case 67:$tabledata = array('start_time'=> '16:30:01','end_time' =>'16:45:00');break;
			case 68:$tabledata = array('start_time'=> '16:45:01','end_time' =>'17:00:00');break;
			
			case 69:$tabledata = array('start_time'=> '17:00:00','end_time' =>'17:15:00');break;
			case 70:$tabledata = array('start_time'=> '17:15:01','end_time' =>'17:30:00');break;
			case 71:$tabledata = array('start_time'=> '17:30:01','end_time' =>'17:45:00');break;
			case 72:$tabledata = array('start_time'=> '17:45:01','end_time' =>'18:00:00');break;
			
			case 73:$tabledata = array('start_time'=> '18:00:00','end_time' =>'18:15:00');break;
			case 74:$tabledata = array('start_time'=> '18:15:01','end_time' =>'18:30:00');break;
			case 75:$tabledata = array('start_time'=> '18:30:01','end_time' =>'18:45:00');break;
			case 76:$tabledata = array('start_time'=> '18:45:01','end_time' =>'19:00:00');break;
			
			case 77:$tabledata = array('start_time'=> '19:00:00','end_time' =>'19:15:00');break;
			case 78:$tabledata = array('start_time'=> '19:15:01','end_time' =>'19:30:00');break;
			case 89:$tabledata = array('start_time'=> '19:30:01','end_time' =>'19:45:00');break;
			case 80:$tabledata = array('start_time'=> '19:45:01','end_time' =>'20:00:00');break;
			
			case 81:$tabledata = array('start_time'=> '20:00:00','end_time' =>'20:15:00');break;
			case 82:$tabledata = array('start_time'=> '20:15:01','end_time' =>'20:30:00');break;
			case 83:$tabledata = array('start_time'=> '20:30:01','end_time' =>'20:45:00');break;
			case 84:$tabledata = array('start_time'=> '20:45:01','end_time' =>'21:00:00');break;
			
			case 85:$tabledata = array('start_time'=> '21:00:00','end_time' =>'21:15:00');break;
			case 86:$tabledata = array('start_time'=> '21:15:01','end_time' =>'21:30:00');break;
			case 87:$tabledata = array('start_time'=> '21:30:01','end_time' =>'21:45:00');break;
			case 88:$tabledata = array('start_time'=> '21:45:01','end_time' =>'22:00:00');break;
			
			case 89:$tabledata = array('start_time'=> '22:00:00','end_time' =>'22:15:00');break;
			case 90:$tabledata = array('start_time'=> '22:15:01','end_time' =>'22:30:00');break;
			case 91:$tabledata = array('start_time'=> '22:30:01','end_time' =>'22:45:00');break;
			case 92:$tabledata = array('start_time'=> '22:45:01','end_time' =>'23:00:00');break;
			
			case 93:$tabledata = array('start_time'=> '23:00:00','end_time' =>'23:15:00');break;
			case 94:$tabledata = array('start_time'=> '23:15:01','end_time' =>'23:30:00');break;
			case 95:$tabledata = array('start_time'=> '23:30:01','end_time' =>'23:45:00');break;
			case 96:$tabledata = array('start_time'=> '23:45:01','end_time' =>'24:00:00');break;
		}
		return $tabledata;
	}
	public function savedata($prdata,$ns1time,$filename){
		//insert data into table
		foreach($prdata as $item){
			$start_time = $item['block_start'];
			$end_time = $item['block_end'];
			$avg_low = $item['avg_low'];
			$avg_medium = $item['avg_medium'];
			$avg_high = $item['avg_high'];
			$avg_power = $item['avg_power'];
			$avg_atemp = $item['avg_atemp'];
			$lowsec = $item['lowsec'];
			$medsec = $item['medsec'];
			$highsec = $item['highsec'];
			$lowsec1 = $this->seconds_to_time($lowsec);
			$medsec1 = $this->seconds_to_time($medsec);
			$highsec1 = $this->seconds_to_time($highsec);
			if($lowsec == 0){ 
				$lowsec = '';
			}
			if($medsec == 0){ 
				$medsec = '';
			}
			if($highsec == 0){ 
				$highsec = '';
			}
			if($avg_low == 0){ 
				$avg_low = '';
			}else{				
				$avg_low = round($avg_low,2);
			}
			if($avg_medium == 0){ 
				$avg_medium = '';
			}else{
				$avg_medium = round($avg_medium,2); 
			}
			if($avg_high == 0){
				$avg_high = '';
			}else{
				$avg_high = round($avg_high,2); 
			}
			if($avg_power == 0){ 
				$avg_power = '';
			}else{
				$avg_power = round($avg_power,2); 
			}
			if($avg_atemp == 0){ 
				$avg_atemp = '';
			}else{
				$avg_atemp = round($avg_atemp,2); 
			}
			
			$ns1time_date  = substr($ns1time,0,10);
			$ns1time_time  = substr($ns1time,11,8);
			
			$lowrange_start = $item['lowrange_start'];
			$lowrange_end = $item['lowrange_end'];
			$mediumrange_start = $item['mediumrange_start'];
			$mediumrange_end = $item['mediumrange_end'];
			$highrange_start = $item['highrange_start'];
			$highrange_end = $item['highrange_end'];
			
			$tabledata = array(
				'start_time'=>$start_time,
				'end_time'=>$end_time,
				'avg_low'=>$avg_low,
				'avg_medium'=>$avg_medium,
				'avg_high'=>$avg_high,
				'avg_power'=>$avg_power,
				'avg_atemp'=>$avg_atemp,
				'ns1time_date'=>$ns1time_date,
				'ns1time_time'=>$ns1time_time,
				'filename'=>$filename,
				'lowrange'=>$lowsec1,
				'mediumrange'=>$medsec1,
				'highrange'=>$highsec1,
				'lowsec'=>$lowsec,
				'medsec'=>$medsec,
				'highsec'=>$highsec,				
			);
			$this->db->insert('tbl_results',$tabledata);
		}
	}
	public function processfile()
	{
		if (!empty($_FILES)){
			ini_set('memory_limit', '-1');

			require_once('SimpleLargeXMLParser.class.php');
			$this->load->helper('date');
			// configuration for upload file
			$upload_path = '//var/www/vhosts/90/288932/webspace/httpdocs/bfcalculator.com/uploads/';
			$config['upload_path'] = $upload_path;
			$config['allowed_types'] = '*';
			$config['max_size'] = 50000;
			$this->load->library('upload', $config);
			$file = "file";
			
			//checking file information and create random file name 
			$filename = $_FILES['file']['name'];
			$data['$filename '] = $filename ;
			$t_ext = explode(".", $filename);
			$ext = strtolower(end($t_ext));
			$data['$ext '] = $ext ;
			$now = time();
			$tfarray = explode(".",$filename);
			$tfilename = strtolower($tfarray[0]);
			
			$sixdigits = mt_rand(100000, 999999);
			$tnfile = md5($now . $tfilename . $sixdigits);
			$nfile = $tnfile .'.' . $ext;			
			$config['file_name'] = $nfile;			
			$this->upload->initialize($config);
			// upload file on server
			if($this->upload->do_upload($file))
			{
				// save entry in tbl_uploads table
				$timestamp = time();
				$tabledata = array(
					'filename' => $nfile,
					'timestamp' => $timestamp,
				);
				$this->db->insert('tbl_uploads',$tabledata);
				
				//get range data
				$this->db->select('v.*');
				$this->db->from('tbl_range_values v');
				$this->db->where('v.id', '1');
				$result = $this->db->get();
				$row = $result->row();
				$low_start = $row->low_start;
				$low_end = $row->low_end;
				$medium_start = $row->medium_start;
				$medium_end = $row->medium_end;
				$high_start = $row->high_start;
				$high_end = $row->high_end;
				
				//read uploaded file
				$filepath = $upload_path . $nfile;
				
				// create a new object
				$parser = new SimpleLargeXMLParser();
				// load the XML
				$parser->loadXML($filepath);
				$ndata = $parser->parseXML();
				
				$start_time = $ndata[0]['time'][0];
				
				$ns1time_time  = substr($start_time,11,8);
				$ns1time_seconds = $this->get_time($ns1time_time);
				$fdata = $ndata[1]['trkseg'][0]['trkpt'];
				$nfdata = [];
				foreach($fdata as $item){
					$ntime = $item['time'][0];
					$hr = $item['extensions'][0]['gpxtpx:TrackPointExtension'][0]['gpxtpx:hr'][0];
					$power = '';
					$atemp = '';
					if(isset($item['extensions'][0]['power'][0])){
						$power = $item['extensions'][0]['power'][0];
					}
					if(isset($item['extensions'][0]['gpxtpx:TrackPointExtension'][0]['gpxtpx:atemp'][0])){
						$atemp = $item['extensions'][0]['gpxtpx:TrackPointExtension'][0]['gpxtpx:atemp'][0];
					}
					
					$ntime = substr($ntime,11,8);
					$timeblock = $this->get_time_block($ntime);
					$seconds = $this->get_time_to_seconds($ntime);
					$nitem['ntime'] = $ntime;
					$nitem['nhr'] = $hr;
					$nitem['timeblock'] = $timeblock;
					$nitem['seconds'] = $seconds;
					$nitem['power'] = $power;
					$nitem['atemp'] = $atemp;
					$nfdata[] = $nitem;
				}
				$prdata = [];
				for($i=1;$i<=96;$i++){
					$low_avg = 0;
					$low_avg_cnt = 0;
					$med_avg = 0;
					$med_avg_cnt = 0;
					$high_avg = 0;
					$high_avg_cnt = 0;
					$avg_low = 0;
					$avg_medium = 0;
					$avg_high = 0;
					$power_avg = 0;
					$atemp_avg = 0;
					$power_avg_cnt = 0;
					$atemp_avg_cnt = 0;
					$avg_power = 0;
					$avg_atemp = 0;
					$s_e_time = $this->get_time($i);
					$record['block_start'] = $s_e_time['start_time'];
					$record['block_end'] = $s_e_time['end_time'];
					
					$lowrange_start = 'initial';
					$lowrange_end = 'initial';
					$mediumrange_start = 'initial';
					$mediumrange_end = 'initial';
					$highrange_start = 'initial';
					$highrange_end = 'initial';
					$low_seconds = 0;
					$med_seconds = 0;
					$high_seconds = 0;
					
					$lows = [];
					$mediums = [];
					$highs = [];
					$lows1 = [];
					$mediums1 = [];
					$highs1 = [];
					$lows2 = [];
					$mediums2 = [];
					$highs2 = [];
					
					$lowsec = 0;
					$medsec = 0;
					$highsec = 0;
						
					$nset = [];
					//$lowsecs = [];
					//$medsecs = [];
					//$highsecs = [];
					//foreach($nfdata as $item1){
					for($k=0;$k<COUNT($nfdata);$k++){
						$item1 = $nfdata[$k];
						$timeblock = $item1['timeblock'];
						$power = $item1['power'];
						$atemp = $item1['atemp'];
						$nhr = $item1['nhr'];
						$seconds = $item1['seconds'];
						$ntime = $item1['ntime'];
						
						
						
						if($timeblock == $i){							
							if($nhr >= $low_start AND $nhr <= $low_end){
								$low_avg = $low_avg + $nhr;
								$low_avg_cnt++;
								//calculate range of low
								$l = $k+1;
								$lowrange_start = $seconds;
								if(isset($nfdata[$l])){
									$nextsecond = $nfdata[$l]['seconds'];
									$next_nhr = $nfdata[$l]['nhr'];
									//if($next_nhr >= $low_start AND $next_nhr <= $low_end){
										$lowsec = $lowsec + ($nextsecond - $seconds);
										$nset[] = $nextsecond;
									//}
								}
								
								$lows[] = $seconds;
								$lows1[] = $nhr;
								$lows2[] = $ntime;
							}elseif($nhr >= $medium_start AND $nhr <= $medium_end){
								$med_avg = $med_avg + $nhr;
								$med_avg_cnt++;
								
								//calculate range of medium
								$l = $k+1;
								$mediumrange_start = $seconds;
								if(isset($nfdata[$l])){
									$nextsecond = $nfdata[$l]['seconds'];
									$next_nhr = $nfdata[$l]['nhr'];
									//if($next_nhr >= $medium_start AND $next_nhr <= $medium_end){
										$medsec = $medsec + ($nextsecond - $seconds);
										$nset[] = $nextsecond;
									//}
								}
								
								$mediums[] = $seconds;
								$mediums1[] = $nhr;	
								$mediums2[] = $ntime;								
							}elseif($nhr >= $high_start AND $nhr <= $high_end){
								$high_avg = $high_avg + $nhr;
								$high_avg_cnt++;
								
								//calculate range of high
								$l = $k+1;
								$mediumrange_start = $seconds;
								if(isset($nfdata[$l])){
									$nextsecond = $nfdata[$l]['seconds'];
									$next_nhr = $nfdata[$l]['nhr'];
									//if($next_nhr >= $high_start AND $next_nhr <= $high_end){
										$highsec = $highsec + ($nextsecond - $seconds);
										$nset[] = $nextsecond;
									//}
								}
								$highs[] = $seconds;
								$highs1[] = $nhr;
								$highs2[] = $ntime;
							}
							//power and atemp
							if($power != ''){
								$power_avg = $power_avg + $power;
								$power_avg_cnt++;
							}
							if($atemp != ''){
								$atemp_avg = $atemp_avg + $atemp;
								$atemp_avg_cnt++;
							}
						}
					}
					if($low_avg_cnt > 0)
					$avg_low = ($low_avg / $low_avg_cnt);
					if($med_avg_cnt > 0)
					$avg_medium = ($med_avg / $med_avg_cnt);
					if($high_avg_cnt > 0)
					$avg_high = ($high_avg / $high_avg_cnt);
				
					if($power_avg_cnt > 0)
					$avg_power = ($power_avg / $power_avg_cnt);
				
					if($atemp_avg_cnt > 0)
					$avg_atemp = ($atemp_avg / $atemp_avg_cnt);
					
					$record['l1'] = $lowrange_start;
					$record['l2'] = $lowrange_end;
					$record['m1'] = $mediumrange_start;
					$record['m2'] = $mediumrange_end;
					$record['h1'] = $highrange_start;
					$record['h2'] = $highrange_end;
					$record['lows'] = $lows;
					$record['lows1'] = $lows1;
					$record['lows2'] = $lows2;
					$record['highs'] = $highs;
					$record['highs1'] = $highs1;
					$record['highs2'] = $highs2;
					$record['mediums'] = $mediums;
					$record['mediums1'] = $mediums1;
					$record['mediums2'] = $mediums2;
					
					$lowrange_start = $this->seconds_to_time($lowrange_start);
					$lowrange_end = $this->seconds_to_time($lowrange_end);
					$mediumrange_start = $this->seconds_to_time($mediumrange_start);
					$mediumrange_end = $this->seconds_to_time($mediumrange_end);
					$highrange_start = $this->seconds_to_time($highrange_start);
					$highrange_end = $this->seconds_to_time($highrange_end);
					
					$record['ns1time_seconds'] = $ns1time_seconds;
					$record['lowsec'] = $lowsec;
					$record['medsec'] = $medsec;
					$record['highsec'] = $highsec;
					$record['nset'] = $nset;
					$record['seconds'] = $seconds;
					$record['nhr'] = $nhr;
					$record['avg_low'] = $avg_low;
					$record['avg_medium'] = $avg_medium;
					$record['avg_high'] = $avg_high;
					$record['avg_power'] = $avg_power;
					$record['avg_atemp'] = $avg_atemp;
					$record['lowrange_start'] = $lowrange_start;
					$record['lowrange_end'] = $lowrange_end;
					$record['mediumrange_start'] = $mediumrange_start;
					$record['mediumrange_end'] = $mediumrange_end;
					$record['highrange_start'] = $highrange_start;
					$record['highrange_end'] = $highrange_end;
					$prdata[] = $record;
				}
				$this->savedata($prdata,$start_time,$nfile);
				$data['start_time'] = $start_time;
				//$data['ndata'] = $ndata;
				//$data['fdata'] = $fdata;
				$data['ns1time_seconds'] = $ns1time_seconds;
				//$data['nfdata'] = $nfdata;
				//$data['prdata'] = $prdata;
			}else{
				$data['errors'] = $this->upload->display_errors('<p>', '</p>');;
				$data['uploadpath'] = $config['upload_path'];

			}
			$data['nfile '] = $nfile ;
			echo json_encode($data);
		}else{
			$data['success'] = 'no';
			echo json_encode($data);
		}
	}
	public function seconds_to_time($seconds){
		if($seconds == 'initial'){
			return '';
		}
		$hr = $seconds / (3600);
		$hr = floor($hr);
		$raw_min = $seconds % (3600);
		$min = $raw_min / 60;
		$sec = $raw_min % 60;
		$min = floor($min);
		$sec = $sec;
		$time =  $this->paddzeo($hr) . ':' . $this->paddzeo($min) . ':' . $this->paddzeo($sec);
		return $time;
	}
	public function paddzeo($txt){
		if(strlen($txt) < 2){
			$txt = '0' . $txt;
		}
		return $txt;
	}
	
}
