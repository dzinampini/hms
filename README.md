# Hospital Management System
## Download Instructions 
Click on clone or download 
Click download 

## Prerequisites 
Assumming you have xampp, lampp, wamp installed
Make sure Apache and MySQL are started 
Unzip the files of this download 

## Installation Instructions 
### Project Files 
Extract the downloaded zipped file 
copy the extracted folder to your htdocs or www folder 

## Configuration 
Open opendb.php 
edit the code following the comments 

### Database 
From your browser open localhost/phpmyadmin
Create the databse name you want 
Open the database 
Click on import 
select the .sql file in the project folder 
and click go 

## Links 
Admin - 
General User - 

## Credentials
Role 				Username			Password

HR manager 			H1234R 				12341234

Consultant			O1234D 				611182

Clerk				C1234K 				633665

Renal Technician 	X1234Y				675925

Lab Technician 		L1234B 				618524

Nurse (CS ward)		C1234S 				397178	


You can create more staff (user accounts ) when you login as HR manager 

## Images 
to change the logo and bckground image open the images folder 
and replace the ones in there 
make sure to use the same names and file extensions 


## Using the System 
Login as hr manager 
	add staff you want to add if there is need 

Login as clerk
	receive payment from a client 

Login as consultant 
	view customers who have made payments for consultation and consult them 

Login as nurse in a certain ward 
	view patients sent to your ward 
	also manage patients already in your ward 
		doctors orders 


Login as a dept technician (Rehab, Renal, Lab, Pharmarcy)
	view doctors orders on patients 
	and execute them then feed back (depends with the dept)

Login as nurse
	give patient outcome (dead, transfered, discharged, absconded )

Login as clerk 
	view patients with outcomes 
	accept bill payment and clear them 
