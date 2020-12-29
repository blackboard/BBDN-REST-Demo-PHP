# BBDN-REST-Demo-PHP
This project contains sample code for interacting with the Blackboard Learn REST Web Services in PHP. This sample was built with PHP 8.0.0. It uses HTTP_Request2 for HTTP processing.

### Project at a glance:
- Target: Blackboard Learn SaaS 2015.12.0 and above
- Source Release: v2.0
- Release Date  2020-12-29
- Author: shurrey
- Tested on Blackboard Learn SaaS Release 3900.2.0-rel.34+4ad580a
- Updated for PHP 8

- Target: Blackboard Learn SaaS 2015.12.0 and above
- Source Release: v1.0
- Release Date  2016-03-13
- Author: shurrey
- Tested on Blackboard Learn SaaS Release 2015.12.0-ci.16+149e9d4

### Requirements:
- PHP - This sample was built with PHP 8.0.0
- Requires the following libraries:
--   HTTP_Request 2 v2.4.2 - This can be installed with pear install HTTP_Request2. See <a href="https://pear.php.net" -target="_blank">PEAR's website</a> for more details.

### Configuring the Code Sample
The connection information is located in the classes/Constants.class.php file. You must change three values:
- $HOSTNAME: must be set equal to your test environment's URL with https.
- $KEY: replace <insert your key> with your key.
- $SECRET: replace <insert your secret> with your secret.

### Using the Code Sample
This is a console app. You can run from the command prompt. The sample code allows you to perform the full Create, Read, Update, and Delete options on the following five objects:
- Datasource
- Term
- Course
- User
- Membership

To run the code, ensure you have followed the steps to configure the sample code, then simply navigate to the directory you cloned the project to and run php restdemo.php. The code will run and print out all of the resulting objects from each call. It will

1. Create, Read, and Update the Datasrouce
2. Create, Read, and Update the Term
3. Create, Read, and Update the Course
4. Create, Read, and Update the User
5. Create, Read, and Update the Membership
6. Delete the Membership
7. Delete the User
8. Delete the Course
9. Delete the Term
10. Delete the Datasource

	
### Conclusion
This code will give you the base knowledge you need to interact with the Blackboard Learn REST services using PHP. For a thorough walkthrough of this code, visit the corresponding Community site page <a href="https://docs.blackboard.com/learn/rest/examples/php-demo" target="_blank">here</a>.
