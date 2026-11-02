<?php

use CRM_Invoicestoexact_ExtensionUtil as E;

class CRM_Invoicestoexact_Form_Settings extends CRM_Core_Form {

  public function buildQuickForm() {
    $elements = [];

    CRM_Utils_System::setTitle('BEMAS Invoices to Exact - Settings');

    $this->addElement('checkbox', 'log_payload', 'Log outgoing Exact payload to CiviCRM log');
    $elements[] = 'log_payload';

    $defaults = [];
    $defaults['log_payload'] = CRM_Invoicestoexact_ExactHelper::isPayloadLoggingEnabled();
    $this->setDefaults($defaults);

    $this->addButtons([
      ['type' => 'submit', 'name' => E::ts('Save'), 'isDefault' => TRUE],
    ]);

    $this->assign('elementNames', $elements);
    parent::buildQuickForm();
  }

  public function postProcess() {
    $values = $this->exportValues();

    CRM_Invoicestoexact_ExactHelper::setPayloadLoggingEnabled(
      array_key_exists('log_payload', $values) ? $values['log_payload'] : 0
    );

    CRM_Core_Session::setStatus('The settings have been saved.', 'Success', 'success');

    parent::postProcess();
  }

}
