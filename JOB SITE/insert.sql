delete from applies;
delete from hires;
delete from job;	
delete from company;
delete from candidate;	
delete from logcandidate;
delete from logcompany;	




insert into logcandidate values ('ram','abcd');
insert into logcandidate values ('bhim','1234');
insert into logcandidate values ('meeta','1234');	

insert into candidate values ('1','ram','ram','ram@gmail.com','1','1234567890','male','23');
insert into candidate values ('2','bhim','bhim','bhim@gmail.com','2','1234567890','male','24');	
insert into candidate values ('3','meeta','meeta','meeta@gmail.com','3','1234567890','male','21');		

insert into logcompany values ('flax','abcd');
insert into logcompany values ('bytes','1234');
insert into logcompany values ('hal','1234');	

insert into company values ('1','flax','flax','banglore','software','flax@gmail.com','https://www.britannica.com/plant/flax','https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed','blah blah');
insert into company values ('2','bytes','bytes','banglore','software','bytes@gmail.com','https://www.britannica.com/plant/flax','https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed','blah blah');	
insert into company values ('3','hal','hal','banglore','automobiles','hal@gmail.com','https://www.britannica.com/plant/flax','https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed','blah blah');

insert into job values ('1','consultant','service','private');	
insert into job values ('2','assistane manager','software','private');	
insert into job values ('3','consultant','service','public');

insert into applies values ('1','1','1','1st jan 2020');
insert into applies values ('2','2','2','1st jan 2020');
insert into applies values ('3','3','3','1st jan 2020');	

insert into hires values ('1','1','1st jan 2020','full time','experience - 3yrs','Rs 60,000');	
insert into hires values ('2','2','1st jan 2020','full time','experience - 3yrs','Rs 40,000');	
insert into hires values ('3','3','1st jan 2020','part time','experience - 3yrs','Rs 20,000');		
