# 🎓 Student Enrolment System (PHP Project)

A simple **PHP + HTML + CSS** application that allows students to fill in their details and enrol in a course.  
This project demonstrates **form handling, session/login checks, and data processing** with PHP.

---

## 🚀 Features
- **Login system** (`login.php`) before accessing the enrolment form.
- **Enrolment form** (`enrolment.html`) collects:
  - Full Name
  - Student ID
  - Selected Course (IT, Business, Engineering, Nursing)
- **Process page** (`process_enrolment.php`) displays the submitted details.
- Basic styling with `main.css`.

---

## 📂 Project Structure
project-root/
─ login.php # Login page (validates user before enrolment)
─ enrolment.html # Enrolment form (student info + course)
─ process_enrolment.php # Displays submitted enrolment details
─ main.css # Styles for form and layout

---

## 🖥️ How to Run Locally
1. Install [XAMPP](https://www.apachefriends.org/) or another PHP server.
2. Place the project folder inside the `htdocs/` directory.  
   Example:  
C:/xampp/htdocs/student-enrolment/
3. Start **Apache** in XAMPP.
4. Open a browser and visit:
http://localhost/student-enrolment/login.php
5. Login, then access the enrolment form and submit details.

---

## 📝 Example Usage
1. **Login.php** → Enter valid login details in `login.php`.
   - User name : "student"
   - Password  : "vic123"
3. **Enrolment Form** → Fill in:
- Full Name: `Alice Smith`  
- Student ID: `123456`  
- Course: `Information Technology`  
3. **Result Page** → `process_enrolment.php` displays:

Student Name: Alice Smith
Student ID: 123456
Course Selected: IT

---

## 🎓 Skills Demonstrated
- PHP form handling with `$_POST`.
- Basic session/login validation.
- Passing form data between pages.
- HTML `<select>` dropdowns.
- CSS for clean and centered form layout.

---

## 📸 Screenshots 
<img width="364" height="261" alt="image" src="https://github.com/user-attachments/assets/af583888-8f85-4cb3-8276-96c1d2bce06c" />


<img width="364" height="261" alt="image" src="https://github.com/user-attachments/assets/3cd64383-57a9-4080-96aa-571a1b021690" />


<img width="364" height="261" alt="image" src="https://github.com/user-attachments/assets/d5ec6b8f-d03e-4478-9eef-b20905bce432" />


---

## 🔮 Future Improvements
- Save enrolment data to a MySQL database.
- Add input validation (e.g., format check for Student ID).
- Add admin page to view all enrolments.
- Enhance login with password hashing.

---

## 📜 License
This project is licensed under the **MIT License**.
