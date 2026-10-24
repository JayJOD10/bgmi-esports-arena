BGMI ESPORTS ARENA — LOCAL XAMPP PROJECT
========================================
Original student/portfolio project. Not affiliated with KRAFTON or BGMI.

SETUP
1. Extract this folder to C:\xampp\htdocs\bgmi-esports-arena
2. Start Apache and MySQL in XAMPP.
3. Open http://localhost/phpmyadmin/
4. Import database.sql.
5. Visit http://localhost/bgmi-esports-arena/

DEMO ADMIN
Username: admin
Password: password

FEATURES
- Premium dark esports-inspired responsive UI
- Tournament discovery, detail pages, status filters
- Player account registration/login and dashboard
- Team registration with four player slots and BGMI ID validation
- Registration receipts and status lookup
- Dynamic fee-specific UPI URI / QR preview
- Demo payment reference submission and manual admin review
- Admin dashboard, tournament create/edit, registration review
- Score entry with calculated placement + elimination points
- Leaderboard and announcement management
- PHP/PDO prepared statements, password hashing, CSRF tokens, server-side validation

PAYMENT WARNING
The payment QR uses UPI ID rawaljnp@okhdfcbank and dynamically embeds the registration amount. Confirm the payee and amount in your UPI app before paying. The QR image API requires internet to render. Submitting a UTR does not verify real payment. The admin verify action is a manual demo workflow, not bank/gateway verification. For real payments, integrate an eligible payment gateway with server-side order creation, signature-verified webhooks, and server-side status checks. Keep all secret keys outside GitHub.

LOCALHOST / GITHUB
This project is intended to run locally in XAMPP. Uploading the source to GitHub does not publish the website. Do not deploy this starter as-is to production. Change demo credentials before sharing with others.


ADMIN LOGIN FIX
Login page accepts a username or an email address in the same field.
Demo admin login: admin / password
If you already imported an older database and admin login fails, open phpMyAdmin, select bgmi_esports_arena, click Import, and import fix-admin-login.sql from this project folder. This only resets the admin password and keeps existing tournament/player data.
