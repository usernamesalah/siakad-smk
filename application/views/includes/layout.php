<?php

	$this->load->view('includes/header', array('title' => $title));
	$this->load->view('includes/sidebar');
	$this->load->view('includes/navbar');
	$this->load->view($content);
	$this->load->view('includes/footer');
?>
