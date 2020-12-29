<?php

class Membership implements JsonSerializable
	{
		public $userId = '';

		public $courseId = '';

		public $dataSourceId = '';

		public $created = '';

		public $availability = '';

		public $courseRoleId = 'Instructor';

		public function jsonSerialize() {
			
			return [
				'dataSourceId' => $this->dataSourceId,
				'availability' => $this->availability,
				'courseRoleId' => $this->courseRoleId
			];
		}
	}