-- Remove per-user SSL requirement (runs during first-time DB initialization)
ALTER USER 'ps3'@'%' REQUIRE NONE;
FLUSH PRIVILEGES;