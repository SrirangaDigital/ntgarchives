<?php

// If messgages need to contain variables, put them as :foo and bind them using model::bindVariablesToString() method

define('FB_SUBJECT_PREFIX', '[Natarang Pratishthan - Archive and Research Centre for Indian Theatre] ');
define('FB_SUCCESS_MSG', 'Your feedback has been received and our team will get back to you shortly.');
define('FB_FAILURE_MSG', 'There is some error in processing your request. Please try again later.');
define('FB_CAPTCHA_MSG', 'Please check your captcha form.');
define('FB_CAPTCHA_RESP_MSG', 'Problem in processing your captcha input.');


define('REG_VERIFY_SUB', '[Natarang Pratishthan - Archive and Research Centre for Indian Theatre] Please verify your email');
define('REG_VERIFY_MSG', 'Dear :name,<br /><br />Use the following link within the next 24 hours to confirm your registration:<br /><a href="' . BASE_URL . 'user/confirmRegistration/:hash">' . BASE_URL . 'user/confirmRegistration/:hash</a><br /><br />Thanks,<br />Natarang Pratishthan - Archive and Research Centre for Indian Theatre, Delhi');
define('REG_VERIFY_SUCCESS_MSG', 'An email has been sent to your address. Use the link given there within the next 24 hours to confirm your registration. If you have not received the email yet, check in your spam folder.');
define('REG_VERIFY_ERROR_MSG', 'Error encountered while registering. Please try again after some time. Sorry for the inconvenience.');

define('REG_CONFIRM_SUB', '[Natarang Pratishthan - Archive and Research Centre for Indian Theatre] Registration confirmed');
define('REG_CONFIRM_MSG', 'Dear :name,<br /><br />Your registration has been confirmed.<br /><br />Thanks,<br />Natarang Pratishthan - Archive and Research Centre for Indian Theatre, Delhi');
define('REG_CONFIRM_SUCCESS_MSG', 'Your registration has been confirmed. <a href="' . BASE_URL . 'user/login">Click here to login.</a>');
define('REG_CONFIRM_ERROR_MSG', 'Your registration confirmation link has expired. <a href="' . BASE_URL . 'user/registration">Click here try register again.</a>');
define('REG_NO_VALIDATION_SUCCESS_MSG', 'Registration successful.<br /><a href="' . BASE_URL . 'user/login">Click here to login.</a>');

define('PWD_RESET_SUB', '[Natarang Pratishthan - Archive and Research Centre for Indian Theatre] Password reset request received');
define('PWD_RESET_MSG', 'Dear :name,<br /><br />Use the following link within the next 24 hours to reset your password:<br /><a href="' . BASE_URL . 'user/resetPassword/:hash">' . BASE_URL . 'user/resetPassword/:hash</a><br /><br />Thanks,<br />Natarang Pratishthan - Archive and Research Centre for Indian Theatre, Delhi');
define('PWD_RESET_SUCCESS_MSG', 'An email has been sent to your address. Use the link given there within the next 24 hours to reset your password.<br />If you have not received the email yet, check in your spam folder.');
define('PWD_RESET_ERROR_MSG', 'Error encountered in resetting the password.<br /><a href="' . BASE_URL . 'user/login">Click here to try again.</a>');

define('PWD_RESET_LINK_SUB', '[Natarang Pratishthan - Archive and Research Centre for Indian Theatre] Password successfully reset');
define('PWD_RESET_LINK_MSG', 'Dear :name,<br /><br />Your password has been successfully reset.<br /><br />Thanks,<br />Natarang Pratishthan - Archive and Research Centre for Indian Theatre, Delhi');
define('PWD_RESET_LINK_SUCCESS_MSG', 'Password successfully reset.<br /><a href="' . BASE_URL . 'user/login">Click here to login.</a>');
define('PWD_RESET_LINK_EXPIRE_MSG', 'Password reset link has expired.<br /><a href="' . BASE_URL . 'user/login">Click here to try again.</a>.');
define('PWD_RESET_LINK_ERROR_MSG', 'Error encountered in resetting the password.<br /><a href="' . BASE_URL . 'user/login">Click here to try again.</a>');

define('VLDTY_INV_EM_PWD', 'Invalid email or password');
define('VLDTY_EMPTY_DATA', 'Fields marked with * are mandatory');
define('VLDTY_EM_UREG', 'This email id seems to be already registered with us. Try logging in or use another id.');
define('VLDTY_PW_NEQ', 'Passwords not in confirmation.');

define('GIT_ADD_MSG', 'New Json for Albums / Archives added');
define('GIT_MOD_MSG', 'Json for Albums / Archives modifed');
define('GIT_DEL_MSG', 'Json for Albums / Archives deleted');
?>
