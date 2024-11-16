ALTER SYSTEM SET max_connections = '40';
ALTER SYSTEM SET shared_buffers = '512MB';
ALTER SYSTEM SET effective_cache_size = '1536MB';
ALTER SYSTEM SET maintenance_work_mem = '256MB';
ALTER SYSTEM SET checkpoint_completion_target = '0.9';
ALTER SYSTEM SET wal_buffers = '16MB';
ALTER SYSTEM SET default_statistics_target = '500';
ALTER SYSTEM SET random_page_cost = '1.1';
ALTER SYSTEM SET effective_io_concurrency = '200';
ALTER SYSTEM SET work_mem = '3276kB';
ALTER SYSTEM SET min_wal_size = '4GB';
ALTER SYSTEM SET max_wal_size = '16GB';

CREATE USER web with encrypted password '12345678';
CREATE DATABASE android_api;
GRANT ALL PRIVILEGES ON DATABASE android_api TO web;
GRANT CREATE ON SCHEMA public TO web;
ALTER DATABASE android_api SET timezone TO 'UTC';