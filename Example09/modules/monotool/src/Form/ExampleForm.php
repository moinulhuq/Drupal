<?php

/**
* @file
* Contains \Drupal\monotool\Form\ExampleForm.
**/

namespace Drupal\monotool\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class ExampleForm extends FormBase {
	
	/**
	* {@inheritdoc}
	*/
	public function getFormId() {
		return 'monotool_example_form';
	}

	/**
	* {@inheritdoc}
	*/
	public function buildForm(array $form, FormStateInterface $form_state) {			
	
		$form['company_name'] = array(
		'#type' => 'textfield',
		'#title' => $this->t('Company name'),
		);

		$form['Address'] = array(
		  '#type' => 'textarea',
		  '#title' => $this->t('Company Address'),
		);		
		
		$form['phone'] = array(
		'#type' => 'tel',
		'#title' => t('Phone'),
		);		

		$form['email'] = array(
		'#type' => 'email',
		'#title' => t('Email'),
		);

		$form['integer'] = array(
		'#type' => 'number',
		'#title' => t('Some integer'),
		// The increment or decrement amount
		'#step' => 1,
		// Miminum allowed value
		'#min' => 0,
		// Maxmimum allowed value
		'#max' => 100,
		);

		$form['date'] = array(
		'#type' => 'date',
		'#title' => t('Date'),
		'#date_date_format' => 'Y-m-d',
		);

		$form['website'] = array(
		'#type' => 'url',
		'#title' => t('Website'),
		);

		$form['search'] = array(
		'#type' => 'search',
		'#title' => t('Search'),
		'#autocomplete_route_name' => FALSE,
		);

		$form['range'] = array(
		'#type' => 'range',
		'#title' => t('Range'),
		'#min' => 0,
		'#max' => 100,
		'#step' => 1,
		);

		$form['submit'] = array(
		'#type' => 'submit',
		'#value' => $this->t('Submit'),
		);
		
		return $form;
	}
	
	/**
	* {@inheritdoc}
	*/
	public function validateForm(array &$form, FormStateInterface $form_state) {		

		if ($form_state->isValueEmpty('company_name')==TRUE) {
			$form_state->setErrorByName('company_name', $this->t('Company name can not be empty'));
		}
		else if (strlen($form_state->getValue('company_name')) < 2) {
			$form_state->setErrorByName('company_name', $this->t('Mobile number is too short.'));
		}	
	
	}	
	
	/**
	* {@inheritdoc}
	*/
	public function submitForm(array &$form, FormStateInterface $form_state) {
	    foreach ($form_state->getValues() as $key => $value) {
			drupal_set_message($key . ': ' . $value);
		}
	}

}
