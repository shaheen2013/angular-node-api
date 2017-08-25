<?php
	class Otherfunctions_model extends CI_Model {
		function signup_model(){
			$this->load->library('form_validation');
			$name = $this->input->post('fullname');
			$email = $this->input->post('email');
			if($this->input->post('email') && $this->input->post('fullname')){
				$length = 12;
				$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%";
				$password = substr( str_shuffle( $chars ), 0, $length );
				
				$this->db->select('u.id');
				$this->db->from('users u');
				$this->db->where('u.email',$email);
				$result = $this->db->get();
				if($result->num_rows() > 0){
					// show error
					$msg = 'This email already in. Please log in.';
					$success = 'no';
					$auth = 'false';
				}else{
					$auth = 'true';
					$time = time();
					$success = 'yes';
					$tabledata = array(
						'name' => $name,
						'email' => $email,
						'password' => $password,
						'timestamp' => $time,
					);
					$msg = 'Please enter data.';
					$auth = 'false';
					if($this->db->insert('users',$tabledata)){
						$userid =  $this->db->insert_id();
						
						$to = $email;
						$from = 'info@validwebdesign.pro';
						$subject = 'Login details for validwebdesign.pro';
						$message = 'Dear ,' . "\r\n" ."\r\n" .		
						$message = $message .'Your Password to login to validwebdesign.pro is as below.' . "\r\n" ."\r\n" .
									$password ."\r\n" ."\r\n";
						$headers .= 'From: '."Valid Web Design". ' <' .$from .'>' ."\r\n" .
							'Reply-To: '. $from . "\r\n" .
							'X-Mailer: PHP/' . phpversion();
						mail($to, $subject, $message, $headers);

						$userdata = array(
							'userid'  =>$userid,
							'name'  =>$name,
							'email'  =>$email,
						);
						$this->session->set_userdata($userdata);
					}
					header('location:'.SITE_URL . 'register/success');
					
				}
			}else{
				$msg = 'Please enter data.';
				$success = 'no';
				$auth = 'false';
			}
			$data['auth'] = $auth;
			$data['success'] = $success;
			$data['msg'] = $msg;
			$data['email'] = $email;
			return $data;
		}
		function login_model(){
			$this->load->library('form_validation');
			//Inputs
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$next = $this->input->post('next');
			$msg = '';
			$success= 'no';
			if($email != '' AND $password != ''){
				
				//Form validation server side if JS disabled
				$this->form_validation->set_rules('email', 'Email address', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				
				$this->db->select('u.id,u.email,u.name,u.payment_status');
				$this->db->from('users u');
				$this->db->where('u.email', $email);
				$this->db->where('u.password', $password);
				$result = $this->db->get();
				if($result->num_rows()> 0)
				{
					$success= 'yes';
					$row = $result->row();
					$userid = $row->id;
					$email = $row->email;
					$name = $row->name;
					$payment_status = $row->payment_status;
					$userdata = array(
						'userid'  =>$userid,
						'name'  =>$name,
						'email'  =>$email,
					);
					$this->session->set_userdata($userdata);
					if($payment_status == 'N'){
						header('location:'.SITE_URL . 'register/success');	
					}
					elseif($next != null AND next != ''){
						header('location:'.SITE_URL . $next);	
					}else{
						header('location:'.SITE_URL);	
					}					
				}else{
					$success = 'no';
					$msg = 'Invalid Credientials';
				}
			}else{
				$success = 'no';
				$msg = 'Please fill required data';
			}
			$data['success'] = $success;
			$data['msg'] = $msg;
			$data['email'] = $email;
			$data['password'] = $password;
			return $data;
		}
	}
