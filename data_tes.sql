CREATE TABLE datafabric1 (
    subs_key BIGINT NOT NULL,
    day_no DATE NOT NULL,
    time_no TIME NOT NULL,
    service_filter VARCHAR(50) NOT NULL,
    payment_cat VARCHAR(50),
    subs_no FLOAT NOT NULL,
	b_no VARCHAR(50) NOT NULL,
	event_action_code CHAR,
	prefix_dom_sk_id FLOAT,
	originating_cell_id VARCHAR(50),
	home_poc VARCHAR(50),
	city_name VARCHAR(50) NOT NULL,
	physical_poc VARCHAR(50),
	roam_zone VARCHAR(50),
	destination_poc VARCHAR(50),
	rem_bal FLOAT,
	rtd_amt FLOAT,
	free_unit VARCHAR,
	usg_unit FLOAT,
	sid VARCHAR
);

SELECT * FROM datafabric1, latlong