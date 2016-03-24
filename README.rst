=========
wordpress
=========

Overview
========

This is an Ansible role for installing and configuring wordpress on
Debian. It also configures awstats. It depends on ``apache`` and
``apache-vhost``, which must also be listed as roles for the server. Use
``wordpress`` like this::

  - role: apache-vhost
    server_name: www.mydomain.com
    server_aliases:
      - mydomain.com
  - role: wordpress
    wordpress_installation_name: myblog
    wordpress_domain: www.mydomain.com
    wordpress_url: /blog
    wordpress_themes:
      mytheme: https://github.com/someone/mytheme.git
      yourtheme: ssh://git@bitbucket.org/someone/yourtheme.git
    mysql_root_password: topsecret
    wordpress_db_password: topsecret
    wordpress_db_charset: utf-8
    wordpress_auth_key: topsecret
    wordpress_secure_auth_key: topsecret
    wordpress_logged_in_key: topsecret
    wordpress_nonce_key: topsecret
    wordpress_auth_salt: salt1
    wordpress_secure_auth_salt: salt2
    wordpress_logged_in_salt: salt3
    wordpress_nonce_salt: salt4

Variables
=========

- ``mysql_root_password``: The root MySQL password. This is a
  definition; the MySQL password is actually set to be the one
  specified.
- ``wordpress_db_password``: The password for the MySQL ``wordpress``
  user. This is also set.
- ``wordpress_installation_name``: A nickname for that particular blog; it is
  used in directory names.
- ``wordpress_domain``: The domain name, such as ``myblog.com``.
- ``wordpress_url``: The URL path, without the domain; such as
  ``/blog``. It must not end in a slash. If the blog is at the top
  level directory, ``wordpress_url`` must be an empty string.
- ``wordpress_themes``: A hash with themes to be installed; keys are
  theme names and values are git repository locations.
- ``wordpress_db_charset``, ``wordpress_auth_key``,
  ``wordpress_secure_auth_key``, ``wordpress_logged_in_key``,
  ``wordpress_nonce_key``, ``wordpress_auth_salt``,
  ``wordpress_secure_auth_salt``, ``wordpress_logged_in_salt``,
  ``wordpress_nonce_salt``: These correspond to Wordpress configuration
  variables; for example, ``wordpress_db_charset`` corresponds to
  ``DB_CHARSET``.
- ``php_upload_max_filesize``, ``php_post_max_size``,
  ``php_memory_limit``: Parameters used to change the file upload size.
  The defaults are 12M, 13M, 15M. See
  https://kinsta.com/blog/increasing-the-maximum-upload-size-in-wordpress/
  for more.

Meta
====

Written by Antonis Christofides

| Copyright (C) 2015 National Technical University of Athens
| Copyright (C) 2015 Antonis Christofides

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see http://www.gnu.org/licenses/.
