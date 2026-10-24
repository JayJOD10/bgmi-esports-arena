# 🎮 BGMI Esports Arena

**A Local Web-Based BGMI Tournament Management System**

BGMI Esports Arena is a web application designed to manage BGMI (Battlegrounds Mobile India) esports tournaments. Players can register for tournaments, submit entry details, provide payment references, and track their registration status. Administrators can manage tournaments, review registrations, and update player statuses.

This project is developed using **PHP, MySQL, HTML, CSS, and JavaScript** and runs locally using XAMPP.

---

## 📌 Table of Contents

1. Project Overview
2. Features
3. Technologies Used
4. System Requirements
5. Installation and Setup
6. Database Configuration
7. Running the Website
8. Admin Login
9. Player Workflow
10. Project Structure
11. Database Overview
12. Payment and UPI QR Information
13. Security Notes
14. Troubleshooting
15. Future Enhancements
16. Academic Project Information

---

## 1. Project Overview

BGMI Esports Arena provides a centralized platform for organizing and managing esports tournaments.

The system separates the player-facing website from the administrator dashboard.

### Player Module

Players can:

* View tournament information.
* Register for tournaments.
* Submit player and team details.
* View entry or registration information.
* Track registration status.

### Admin Module

Administrators can:

* Access the admin dashboard.
* Review tournament registrations.
* Manage player entries.
* Review payment references.
* Update registration or payment statuses.

The application is intended to run on a local computer using XAMPP.

---

## 2. Features

### User Features

* Tournament information and landing page.
* Player registration.
* Entry submission.
* Registration status tracking.
* Responsive website interface.
* BGMI-themed esports design.

### Admin Features

* Administrator login.
* Dashboard for managing registrations.
* Registration and entry review.
* Payment reference review.
* Status management.

### Design Features

* Dark esports-inspired interface.
* Custom BGMI Esports Arena branding.
* Logo and favicon.
* Organized CSS and JavaScript assets.

---

## 3. Technologies Used

| Technology | Purpose                       |
| ---------- | ----------------------------- |
| HTML5      | Website structure             |
| CSS3       | Styling and responsive design |
| JavaScript | Client-side interactions      |
| PHP        | Server-side processing        |
| MySQL      | Database storage              |
| XAMPP      | Local development environment |
| Apache     | Local web server              |
| phpMyAdmin | Database management           |

---

## 4. System Requirements

Before installation, ensure that you have:

* Windows computer.
* XAMPP installed.
* Apache and MySQL services available in XAMPP.
* A modern web browser.
* The BGMI Esports Arena project folder or ZIP file.

Download XAMPP from the official website:

https://www.apachefriends.org/

---

## 5. Installation and Setup

Follow these steps in order.

### Step 1: Install XAMPP

1. Download XAMPP from the official website.
2. Install it on your computer.
3. Open the XAMPP Control Panel.

The default installation directory is usually:

`C:\xampp\`

### Step 2: Extract the Project

Extract the project ZIP file.

Copy the project folder into:

`C:\xampp\htdocs\bgmi-esports-arena\`

Make sure the main PHP file is located at:

`C:\xampp\htdocs\bgmi-esports-arena\index.php`

**Important:** Avoid accidentally creating a nested folder such as:

`C:\xampp\htdocs\bgmi-esports-arena\bgmi-esports-arena\index.php`

If the folder is nested, move the project files into the correct directory.

### Step 3: Start Apache and MySQL

1. Open the XAMPP Control Panel.
2. Click **Start** next to Apache.
3. Click **Start** next to MySQL.
4. Confirm that both services are running.

### Step 4: Open phpMyAdmin

Open this URL in your browser:

http://localhost/phpmyadmin/

Alternatively, open the database import page directly:

http://localhost/phpmyadmin/index.php?route=/import

### Step 5: Create the Database

In phpMyAdmin:

1. Click **New** in the sidebar.

2. Enter the database name:

   `bgmi_esports_arena`

3. Select a compatible collation, such as `utf8mb4_general_ci`, if prompted.

4. Click **Create**.

If the database already exists, you can use it instead of creating another one.

### Step 6: Import the Database

1. Select the `bgmi_esports_arena` database in phpMyAdmin.
2. Open the **Import** tab.
3. Click **Choose File**.
4. Select the project's `database.sql` file.
5. Keep the default import settings unless the project documentation specifies otherwise.
6. Click **Import** or **Go**.
7. Wait for the success message.

After importing, check that the expected tables are visible in the database.

**Important:** Importing the SQL file into the wrong database can prevent the website from working correctly.

---

## 6. Database Configuration

Find the PHP configuration file responsible for connecting to MySQL. Depending on the project structure, it may be located in the `includes` directory.

Check the database connection settings.

Typical local XAMPP settings are:

| Setting           | Value                |
| ----------------- | -------------------- |
| Database host     | `localhost`          |
| Database name     | `bgmi_esports_arena` |
| Database username | `root`               |
| Database password | Empty by default     |

These are common default settings, not a guarantee that your local XAMPP configuration uses them.

Ensure that the database name in the PHP configuration matches the database you imported.

If your MySQL root account has a password, update the configuration accordingly.

---

## 7. Running the Website

Once Apache and MySQL are running and the database has been imported, open:

### Main Website

http://localhost/bgmi-esports-arena/

### Admin Login

http://localhost/bgmi-esports-arena/admin/login.php

### Admin Dashboard

http://localhost/bgmi-esports-arena/admin/dashboard.php

### phpMyAdmin

http://localhost/phpmyadmin/

**Note:** The admin dashboard may require a valid authenticated admin session. Open the admin login page first.

If a page does not load, check the project directory, Apache status, PHP errors, and database configuration.

---

## 8. Admin Login

Open:

http://localhost/bgmi-esports-arena/admin/login.php

Enter the administrator credentials configured for your project.

If the project has been configured with the default development credentials, the expected credentials are:

* **Username:** `admin`
* **Password:** `password`

These credentials may not work if the database was modified, the administrator account was changed, or the installed project version uses different authentication settings.

### If Admin Login Fails

1. Confirm that the database was imported successfully.
2. Verify the admin username and password.
3. Check whether the application expects a username or an email address.
4. Inspect the administrator table in phpMyAdmin.
5. Check the PHP database configuration.
6. Review PHP and Apache error logs if necessary.

Do not change database password hashes manually unless you understand how the application verifies administrator passwords.

For a real deployment, replace default credentials with a strong password.

---

## 9. Player Workflow

Use the following process to test the player-facing functionality.

### Step 1: Open the Website

http://localhost/bgmi-esports-arena/

### Step 2: Review Tournament Information

Explore the landing page and available tournament information.

### Step 3: Register

Open the registration page and enter the requested player details.

Use test information while evaluating the application.

### Step 4: Submit Entry Details

Complete the available entry form and submit the information.

### Step 5: Check Registration Status

Open the registration status page and follow the instructions provided by the website.

### Step 6: Review the Entry as Admin

1. Open the admin login page.
2. Sign in with valid administrator credentials.
3. Open the dashboard.
4. Find the submitted registration.
5. Review the entry and any payment reference.
6. Update the status if the interface provides that option.

The exact workflow depends on the functionality included in the installed project version.

---

## 10. Project Structure

The project may contain the following files and directories:

```text
bgmi-esports-arena/
│
├── index.php
├── register.php
├── entry.php
├── payment.php
├── status.php
├── database.sql
├── README.md
├── README.txt
├── fix-admin-login.sql
│
├── admin/
│   ├── login.php
│   ├── dashboard.php
│   └── ...
│
├── includes/
│   └── ...
│
├── css/
│   └── ...
│
├── js/
│   └── ...
│
└── images/
    ├── arena-logo.jpg
    └── favicon.png
```

The actual files may vary by project version.

### Main Files

| File or Directory | Purpose                                       |
| ----------------- | --------------------------------------------- |
| `index.php`       | Main landing page                             |
| `register.php`    | Player registration                           |
| `entry.php`       | Tournament entry workflow                     |
| `payment.php`     | Payment-related interface                     |
| `status.php`      | Registration status workflow                  |
| `database.sql`    | Database schema and any included initial data |
| `admin/`          | Administrator pages                           |
| `includes/`       | Shared PHP components and configuration       |
| `css/`            | Stylesheets                                   |
| `js/`             | JavaScript files                              |
| `images/`         | Logo, favicon, and other images               |

Some filenames may have different responsibilities in different versions. Refer to the actual source code when troubleshooting.

---

## 11. Database Overview

The MySQL database stores the information needed by the application.

Depending on the schema included in `database.sql`, it may contain data related to:

* Administrator accounts.
* Player registrations.
* Tournament entries.
* Payment references.
* Registration and payment statuses.
* Tournament information.

The exact table names and fields are defined by the imported SQL file.

To inspect the database:

1. Open http://localhost/phpmyadmin/
2. Select `bgmi_esports_arena`.
3. Review the tables.
4. Select a table to inspect its structure and records.

**Important:** Do not delete or rename tables without checking which PHP files use them.

---

## 12. Payment and UPI QR Information

The application may provide a UPI QR code or payment instructions for tournament entry fees.

If the application asks a player to submit a payment reference, an administrator should verify the payment before confirming the entry.

### Important Payment Limitations

A UPI QR code with a prefilled amount does not independently prove that a payment was completed.

Displaying a QR code or collecting a transaction reference is not the same as verifying the transaction with a payment provider.

Unless a verified payment gateway integration has been implemented, payment review must be treated as a manual process.

For live tournaments involving real entry fees:

* Verify payments before confirming registrations.
* Never treat a screenshot alone as definitive proof of payment.
* Protect transaction references and personal information.
* Follow applicable payment-provider rules and local laws.

---

## 13. Security Notes

This project is intended for local development and academic demonstration.

Before deploying it publicly, review and improve its security.

Recommended measures include:

* Replace default administrator credentials.
* Use password hashing for administrator accounts.
* Use prepared SQL statements to reduce SQL injection risks.
* Validate and sanitize submitted data on the server.
* Escape output to reduce cross-site scripting risks.
* Protect sensitive actions against cross-site request forgery.
* Enforce authentication and authorization on administrator pages.
* Store database credentials securely.
* Avoid exposing detailed PHP errors to public users.
* Configure HTTPS and secure session cookies for production.
* Back up the database regularly.
* Verify payment transactions through a trusted payment provider if automated confirmation is required.

Do not assume that every security measure is already implemented simply because it appears in this checklist.

---

## 14. Troubleshooting

### Problem 1: Website Does Not Open

**Possible causes:**

* Apache is stopped.
* The project folder is in the wrong location.
* The URL contains an incorrect folder name.
* Another service is using Apache's configured port.

**Solutions:**

1. Start Apache in XAMPP.

2. Verify the project location.

3. Confirm that `index.php` exists in the project root.

4. Open:

   http://localhost/bgmi-esports-arena/

5. Check Apache's port configuration if the default port is unavailable.

### Problem 2: Database Connection Error

**Possible causes:**

* MySQL is stopped.
* The database has not been imported.
* The database name is incorrect.
* The username or password is incorrect.

**Solutions:**

1. Start MySQL in XAMPP.
2. Open phpMyAdmin.
3. Confirm that `bgmi_esports_arena` exists.
4. Verify the imported tables.
5. Check the PHP database configuration.

### Problem 3: Tables Are Missing

**Solutions:**

1. Open phpMyAdmin.
2. Select the correct database.
3. Check whether the tables exist.
4. Import `database.sql` if the database has not been initialized.

Avoid importing the same SQL file repeatedly without checking its contents, especially if it contains existing-data inserts or destructive statements.

### Problem 4: Admin Login Is Not Working

**Solutions:**

1. Open the admin login page.
2. Check whether the login form expects a username or email.
3. Confirm that the admin account exists.
4. Verify the password against the application's authentication logic.
5. Check for PHP errors and database connection failures.

### Problem 5: CSS or Images Are Missing

**Possible causes:**

* Asset paths are incorrect.
* The project folder has been renamed.
* Files are missing from the extracted project.

**Solutions:**

1. Confirm that the `css`, `js`, and `images` directories exist.
2. Check the browser's developer console.
3. Inspect failed network requests.
4. Verify that the asset paths match the actual directory structure.

### Problem 6: phpMyAdmin Does Not Open

Try:

http://localhost/phpmyadmin/

Confirm that Apache and MySQL are running and that the XAMPP installation is configured correctly.

### Problem 7: Registration Status Does Not Update

Check that:

* The form submission succeeded.
* The database contains the submitted record.
* The application is using the correct database.
* The administrator updated the intended registration.
* The status page is retrieving the correct record.

### Problem 8: A 404 Error Appears

Check the URL and confirm that the requested PHP file exists.

For example, the expected main entry point is:

`C:\xampp\htdocs\bgmi-esports-arena\index.php`

If the project directory has a different name, adjust the URL to match it.

### Problem 9: Access Is Denied or a Page Redirects Unexpectedly

Some pages may require an authenticated session or valid registration details.

If the behavior appears incorrect:

1. Open the page directly using the expected URL.
2. Test after signing in where required.
3. Check browser redirects and PHP session handling.
4. Review the relevant PHP code and server logs.

---

## 15. Future Enhancements

Possible improvements include:

* Tournament creation and scheduling.
* Team and squad management.
* Tournament slot selection.
* Automated payment verification through a supported payment gateway.
* Email or SMS notifications.
* Live leaderboard integration.
* Match results and standings.
* Admin analytics and reports.
* Improved mobile responsiveness.
* Stronger role-based access control.
* Production deployment with HTTPS.
* Automated testing and database backup tools.

These are potential future features and should not be considered implemented unless they are present in the source code.

---

## 16. Academic Project Information

**Project Name:** BGMI Esports Arena

**Project Type:** Web-Based Tournament Management System

**Project Domain:** Web Development and Database Management

**Frontend:** HTML, CSS, JavaScript

**Backend:** PHP

**Database:** MySQL

**Development Environment:** XAMPP

**Purpose:** To demonstrate the development of a web application for managing player registrations, tournament entries, and administrative workflows.

This project can be used as an academic minor project and as a portfolio demonstration of PHP and MySQL development.

---

## Quick Access Links

| Purpose         | URL                                                     |
| --------------- | ------------------------------------------------------- |
| Main Website    | http://localhost/bgmi-esports-arena/                    |
| Admin Login     | http://localhost/bgmi-esports-arena/admin/login.php     |
| Admin Dashboard | http://localhost/bgmi-esports-arena/admin/dashboard.php |
| phpMyAdmin      | http://localhost/phpmyadmin/                            |
| Database Import | http://localhost/phpmyadmin/index.php?route=/import     |

These links work when the project is installed in the expected XAMPP directory and the relevant services are running.

---

## License and Usage

This project is intended for educational and demonstration purposes.

Before using it for a real tournament, review the source code, security, privacy practices, payment workflow, and applicable BGMI and tournament requirements.

---

**BGMI Esports Arena — Compete. Conquer. Champion.**
