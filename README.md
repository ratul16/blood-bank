## Blood Donor Management System

---
## **Proposal**

One proposed solution for this specific problem is to develop a management system so that the problem can be solved to some extent. Blood Bank Management System can collect blood from many donors in short from various sources and distribute that blood to needy people who require blood. To do all this we require high-quality Web application to manage those jobs. The basic building aim is to provide blood donation service to the people recently. Blood Bank Management System is a Web-based application that is designed to store, process, retrieve and analyze information concerned with the administrative and inventory management within a blood bank. The project aims at maintaining all the information pertaining to blood donors, different blood groups are available in each blood bank and help them manage in a better way. Project Aim is to provide transparency in this field, make the process of obtaining blood from a blood bank hassle-free and corruption-free and make the system of blood bank management effective. The information will be available in shortest time possible as it will be in real time.

## **Technology**

1. HTML
2. CSS
3. JS
4. MYSQL
5. PHP

## **Freatures**

*   It will provide the searching ability based on certain factors.
*   Manage the information of the donors.
*   It will deal with  monitoring the information of blood type and doner information.
*   It will show the information and description of the donor.
*   Will contain register, User, Login, Authentication.
*   It will work in real time.
*   Can make a post for blood.
*   It will update, delete, save data. 


## **SQL Quries**

1. **Connect :**
     * `mysqli_connect ($db['hostname'],$db['user'],$db['password'],$db['database'])`
2. **Registration :**
    * `:"INSERT INTO donor (fname, lname, age, sex, blood_group, phone, dob, city, state, about) VALUES ('$fname','$lname','$age','$sex','$blood','$phone','$dob','$area','$state','$about')"`
    * `"INSERT INTO login (email, password) VALUES ('$email','$password')"`
3. **Login**
     * `"SELECT * FROM login WHERE email = '$email' AND password = ('$password')"`
4. **Search :**
     * `"SELECT * from donor where fname Like '%$name%' or lname Like '%$name%' or blood_group Like '%$name%'"`
5. **Donor List :**
     * `"SELECT d.fname, d.lname, d.age, d.sex, d.blood_group, d.phone, d.city, d.state, l.email FROM donor d NATURAL JOIN login l ORDER BY blood_group DESC"`
6. **Filter :**
   * `"SELECT * from donor where blood_group Like '%$Blood%' or city Like '%$location%'";`
   * `"SELECT * from post where Blood_G Like '%$Blood%' or city Like '%$location%' ";`
7. **Post :**
   * `"INSERT INTO post (Blood_G, Name, phone, city, urgency, S_Remark) VALUES ('$Blood_G','$name','$Phone','$City','$Urgent','$Remark')";`
   * ` "INSERT INTO post (Blood_G, Name, phone, city, urgency, S_Remark) VALUES ('$Blood_G','$name','$Phone','$City','$Urgent','$Remark')";`


8. **Trigger :**
   * `CREATE TRIGGER `donor_backup` BEFORE INSERT ON `donor` FOR EACH ROW INSERT INTO donor_backup VALUES (NEW.uId,NEW.fname,NEW.lname,NEW.age,NEW.sex,NEW.blood_group,NEW.phone,NEW.dob,NEW.city,NEW.state,NEW.about)`
   * `CREATE TRIGGER `donor_delete` BEFORE DELETE ON `donor`FOR EACH ROW BEGIN INSERT INTO donor_delete VALUES (old.uId,old.fname,old.lname,old.age,old.sex,old.blood_group,old.phone,old.dob,old.city,old.state,old.about); END`

9. **Delete :**
   * `"Delete FROM donor where uid Like '$delete'"`

10. **Database Create: **
     *' Create database `blood_bank`;'
11. **Database Table: **
     * 'CREATE TABLE `donor` (
  `uId` int(7) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(100) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;'

* 'CREATE TABLE `donor_backup` (
  `uId` int(7) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(100) NOT NULL,
  `about` varchar(500) NOT NULL
)' 

* 'CREATE TABLE `donor_delete` (
  `uId` int(7) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(100) NOT NULL,
  `about` varchar(500) DEFAULT NULL
)'

* 'CREATE TABLE `login` (
  `ID` int(7) NOT NULL,
  `uId` int(7) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
)'

* 'CREATE TABLE `post` (
  `P_id` int(5) NOT NULL,
  `Blood_G` varchar(20) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(255) NOT NULL,
  `urgency` varchar(100) NOT NULL,
  `S_Remark` varchar(255) DEFAULT NULL
)'

13. **Database Table Alter: **
     * ALTER TABLE `donor`
  ADD PRIMARY KEY (`uId`);

  * ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `email` (`email`,`password`);
  
  * ALTER TABLE `post`
  ADD PRIMARY KEY (`P_id`);

  * ALTER TABLE `donor`
  MODIFY `uId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

* ALTER TABLE `login`
  MODIFY `ID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

* ALTER TABLE `post`
  MODIFY `P_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

14. **Database Table Increament: **
* AUTO_INCREMENT for table `post`
* AUTO_INCREMENT for table `login`
* AUTO_INCREMENT for table `donor`




## **Contribution :**
1. [Israt Jahan Diya](https://github.com/diyaa222)
2. [Ramiza Maliha](https://github.com/ZamiraRamizoro)
3. [Sumiya Sadia](https://github.com/SadiaSheikh)
