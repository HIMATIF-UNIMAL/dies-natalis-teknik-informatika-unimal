<?php

function sudahLogin()
{
    $ci = get_instance();
    if($ci->session->userdata('status') == 1){
			redirect(base_url('user'));
		}
}

function belumLogin()
{
    $ci = get_instance();
    if($ci->session->userdata('status') != 1){
			redirect(base_url('auth'));
		}
}

