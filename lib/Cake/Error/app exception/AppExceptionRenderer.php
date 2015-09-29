<?php
    
    App::uses('ExceptionRenderer', 'Error');

    class AppExceptionRenderer extends ExceptionRenderer {

        public function notFound($error) {
            
            $userId     =  AuthComponent::user();
            $role       =  $userId['role'];
            

            if($role=="super_admin")
                 $this->controller->redirect(array('controller'=>'users','action'=>'admin_dashboard','admin'=>true));               
            else if($role=="manager")
                 $this->controller->redirect(array('controller'=>'managers','action'=>'index'));
            else if($role=="admin")
                 $this->controller->redirect(array('controller'=>'daycares','action'=>'index'));
            else
                 $this->controller->redirect(array('controller'=>'users','action'=>'logout'));         
        }

        public function missingController($error) {
            $this->notFound($error);
        }
        public function missingAction($error) {
            $this->notFound($error);
        }
        public function missingView($error) {
            $this->notFound($error);
        }
        public function missingLayout($error) {
            $this->internalError($error);
        }
        public function missingHelper($error) {
            $this->internalError($error);
        }
        public function missingBehavior($error) {
            $this->internalError($error);
        }
        public function missingComponent($error) {
            $this->internalError($error);
        }
        public function missingTask($error) {
            $this->internalError($error);
        }
        public function missingShell($error) {
            $this->internalError($error);
        }
        public function missingShellMethod($error) {
            $this->internalError($error);
        }
        public function missingDatabase($error) {
            $this->internalError($error);
        }
        public function missingConnection($error) {
            $this->internalError($error);
        }
        public function missingTable($error) {
            $this->internalError($error);
        }
        public function privateAction($error) {
            $this->internalError($error);
        }
       

    }


?>