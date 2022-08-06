#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content
(
    tx_sitepackage_slide varchar(255) DEFAULT '' NOT NULL
);


#
# Table structure for table 'tx_sitepackage_slide'
#
CREATE TABLE tx_sitepackage_slide
(
    uid      int(11) NOT NULL auto_increment,
    pid      int(11) DEFAULT '0' NOT NULL,
    title    varchar(255) DEFAULT ''                     NOT NULL,
    bodytext mediumtext,
    image    int(11) DEFAULT '0' NOT NULL,
    CType    varchar(255) DEFAULT 'tx_sitepackage_slide' NOT NULL,

    PRIMARY KEY (uid),
    KEY      parent (pid)
);
