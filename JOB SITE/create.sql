create table logcandidate
(
	username varchar(64),
	password varchar(16),
	primary key (username)
);	

create table candidate
(
	candidate_id varchar(16),
	name varchar(64),
	username varchar(64),
	email varchar(64),
	resume varchar(16),
	contact_no varchar(16),
	gender varchar(16),
	age int,
	primary key (candidate_id),
	foreign key (username) references logcandidate(username)
);	

create table logcompany
(
	username varchar(64),
	password varchar(16),
	primary key (username)
);

create table company
(
	company_id varchar(16),
	name varchar(64),
	username varchar(64),
	headquarters varchar(64),
	industry_type varchar(64),
	email varchar(64),
	webpage_link varchar(128),
	map_location varchar(128),
	description varchar(512),
	primary key (company_id),
	foreign key (username) references logcompany(username)
);	

create table job
(
	job_id varchar(16),
	position varchar(128),
	field varchar(128),
	sector varchar(128),
	primary key (job_id)
);	

create table applies
(
	candidate_id varchar(16),
	company_id varchar(16),
	job_id varchar(16),
	date_of_hiring varchar(128),
	primary key (candidate_id,company_id,job_id,date_of_hiring),
	foreign key (candidate_id) references candidate(candidate_id)
		on delete cascade,
	foreign key (company_id) references company(company_id)
		on delete cascade,
	foreign key (job_id) references job(job_id)
		on delete cascade		
);	

create table hires
(
	company_id varchar(16),
	job_id varchar(16),
	date_of_hiring varchar(128),
	type varchar(128),
	job_description varchar(512),
	salary varchar(16),
	primary key (company_id,job_id,date_of_hiring),
	foreign key (company_id) references company(company_id)
		on delete cascade,
	foreign key (job_id) references job(job_id)
		on delete cascade
);	