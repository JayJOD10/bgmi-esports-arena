-- Run this in phpMyAdmin against the existing bgmi_esports_arena database.
-- It only resets the demo admin password; it does not delete tournament/player data.
UPDATE admins
SET password_hash = '$2y$12$KZz4zr.zarAtIkAeQHMbwO9Pvx0IhmaagwVwZVaLmACyN/Pu/iCZC', is_active = 1
WHERE username = 'admin';

-- If the admin row is missing, run this instead of the UPDATE above:
-- INSERT INTO admins (username, password_hash, is_active)
-- VALUES ('admin', '$2y$12$KZz4zr.zarAtIkAeQHMbwO9Pvx0IhmaagwVwZVaLmACyN/Pu/iCZC', 1);
