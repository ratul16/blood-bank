## Blood Donor Management System

---
##**Proposal**

One proposed solution for this specific problem is to develop a management system so that the problem can be solved to some extent. Blood Bank Management System can collect blood from many donors in short from various sources and distribute that blood to needy people who require blood. To do all this we require high-quality Web application to manage those jobs. The basic building aim is to provide blood donation service to the people recently. Blood Bank Management System is a Web-based application that is designed to store, process, retrieve and analyze information concerned with the administrative and inventory management within a blood bank. The project aims at maintaining all the information pertaining to blood donors, different blood groups are available in each blood bank and help them manage in a better way. Project Aim is to provide transparency in this field, make the process of obtaining blood from a blood bank hassle-free and corruption-free and make the system of blood bank management effective. The information will be available in shortest time possible as it will be in real time.

##**Technology**

1. HTML
2. CSS
3. JS
4. MYSQL
5. PHP

##**Freatures**

*   It will provide the searching ability based on certain factors.
*   Manage the information of the donors.
*   It will deal with  monitoring the information of blood type and doner information.
*   It will show the information and description of the donor.
*   Will contain register, User, Login, Authentication.
*   It will work in real time.
*   Can make a post for blood.
*   It will update, delete, save data. 


##**SQL Quries**

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

12. **Database Table data insert: **
     * 'INSERT INTO `donor` (`uId`, `fname`, `lname`, `age`, `sex`, `blood_group`, `phone`, `dob`, `city`, `state`, `about`) VALUES
(1, 'Hasibul Alam', 'Ratul', 25, 'Male', 'O-', '01730482775', '1994-09-16', 'Dhaka', 'Yes', 'Calm'),
(2, 'Ishrat', 'Diya', 24, 'Female', 'B+', '01686660052', '1995-04-16', 'Dhaka', 'No', 'Keep calm and donate blood'),
(3, 'Ramiza', 'Maliha', 24, 'Female', 'O+', '01837542987', '1996-10-14', 'Chittagong', 'Yes', 'Carpe Diem!'),
(4, 'Sadia', 'Sheikh', 23, 'Female', 'A+', '01554876254', '1997-06-14', 'Dhaka', 'No', 'Need blood? contact me'),
(5, 'Mahira', 'Jalisha', 22, 'Female', 'O+', '01843927943', '1998-02-28', 'Dhaka', 'Yes', 'wonderer who is Wondering about the wondering world'),
(6, 'Nahid', 'Ontu', 24, 'Male', 'B+', '01676800456', '1996-06-25', 'Dhaka', 'Yes', 'Life has so many stories to tell'),
(7, 'Faria', 'Islam', 24, 'Female', 'A+', '01554697826', '1995-09-22', 'Khulna', 'No', 'No Comments'),
(8, 'Tahmid', 'Abrar', 26, 'Male', 'AB+', '01478596235', '1993-12-06', 'Rajshahi', 'No', 'I had a dream');'

* 'INSERT INTO `donor_backup` (`uId`, `fname`, `lname`, `age`, `sex`, `blood_group`, `phone`, `dob`, `city`, `state`, `about`) VALUES
(2, 'Ishrat', 'Diya', 24, 'Female', 'B+', '1686660052', '0000-00-00', 'Dhaka', 'No', 'Keep calm and donate blood'),
(3, 'Ramiza', 'Maliha', 24, 'Female', 'O+', '1837542987', '0000-00-00', 'Chittagong', 'Yes', 'Carpe Diem!'),
(4, 'Sadia', 'Sheikh', 23, 'Female', 'A+', '1554876254', '0000-00-00', 'Dhaka', 'No', 'Need blood? contact me'),
(5, 'Mahira', 'Jalisha', 22, 'Female', 'O+', '1843927943', '0000-00-00', 'Dhaka', 'Yes', 'wonderer who is Wondering about the wondering world'),
(6, 'Nahid', 'Ontu', 24, 'Male', 'B+', '1676800456', '0000-00-00', 'Dhaka', 'No', 'Life has so many stories to tell'),
(7, 'Faria', 'Islam', 24, 'Female', 'A+', '1554697826', '0000-00-00', 'Kushtia', 'No', 'No Comments'),
(8, 'Tahmid', 'Abrar', 26, 'Male', 'AB+', '1478596235', '0000-00-00', 'Joypurhat', 'No', 'I had a dream'),
(0, 'Naruto', 'Uzumaki', 26, 'Male', '', '01552646799', '1994-10-13', 'Chittagong', 'Yes', 'DATTEBAYOOOOO!!!!');'

* INSERT INTO `donor_delete` (`uId`, `fname`, `lname`, `age`, `sex`, `blood_group`, `phone`, `dob`, `city`, `state`, `about`) VALUES
(9, 'Naruto', 'Uzumaki', 26, 'Male', '', '01552646799', '1994-10-13', 'Chittagong', 'Yes', 'DATTEBAYOOOOO!!!!');

* 'INSERT INTO `login` (`ID`, `uId`, `email`, `password`) VALUES
(1, 1, 'hasib.ratul@nsu.edu', 'Calmhasib25'),
(2, 2, 'ishrat.diya94@nsu.edu', '#moradiya'),
(3, 3, 'ramiza.malihahehehehe@nsu.edu', '#ramizoro1423'),
(4, 4, 'sadia.sheikh@nsu.edu', 'armin7'),
(5, 5, 'mahira.jalishalol@nsu.edu', 'BakaNeko'),
(6, 6, 'nahid.ontu299nsu.edu', 'barishaillanahid'),
(7, 7, 'faria.punni@gmail.com', 'punni94'),
(8, 8, 'tahmid_tousif@gmail.com', 'fisout'),
(9, 0, 'n_uzumaki@gmail.com', 'narutooo');'

* 'INSERT INTO `post` (`P_id`, `Blood_G`, `Name`, `phone`, `city`, `urgency`, `S_Remark`) VALUES
(1, 'O+', 'Bomkesh Bokshi', '01975684264', 'Dhaka', 'ASAP', 'Needs in 2 days.'),
(2, 'A+', 'Robert Langdon', '01574598354', 'Dhaka', 'NO', 'Needed for an open heart surgery on. Due: 01/01/2020'),
(3, 'O-', 'Anondo Kor', '01235489753', 'Khulna', 'NO', 'The patient is now ok.');
'
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




##**Contribution :**
1. [Israt Jahan Diya](https://github.com/diyaa222)
2. [Ramiza Maliha](https://github.com/ZamiraRamizoro)
3. [Sumiya Sadia](https://github.com/SadiaSheikh)
