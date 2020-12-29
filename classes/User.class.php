<?php

class User implements JsonSerializable
	{
		public $id = '';

		public $uuid = '';

		public $externalId = 'bbdnrestdemophpuser';

		public $dataSourceId = '';

		public $userName = 'restphpuser';

        public $password = 'Bl@ckb0ard!';

		public $studentId = 'restphpuser';

		public $birthDate = '';

		public $created = '';
		
		public $lastLogin = '';

		public $availability =  '';

		public $name =  '';

		public $job = '';

		public $contact = '';
		
		public $address = '';

		public $locale = '';

		public function jsonSerialize() {
			
			if ( $this->id == '' ) {
				return [
					'externalId' => $this->externalId,
					'dataSourceId' => $this->dataSourceId,
					'userName' => $this->userName,
					'password' => $this->password,
					'studentId' => $this->studentId,
					'availability' => $this->availability,
					'name' => $this->name,
					'contact' => $this->contact
				];
			} else {
				return [
					'id' => $this->id,
					'externalId' => $this->externalId,
					'dataSourceId' => $this->dataSourceId,
					'userName' => $this->userName,
					'password' => $this->password,
					'studentId' => $this->studentId,
					'availability' => $this->availability,
					'name' => $this->name,
					'contact' => $this->contact
				];
			}
		}
	}