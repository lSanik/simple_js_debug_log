#db schema
create table jsError
(
  jse_id        int auto_increment
    primary key,
  jse_error     text                                not null,
  jse_file      text                                not null,
  jse_message   text                                not null,
  jse_line      text                                not null,
  jse_col       text                                not null,
  jse_page      text                                not null,
  date          timestamp default CURRENT_TIMESTAMP not null,
  jse_ip        text                                null,
  jse_useragent text                                null
);
