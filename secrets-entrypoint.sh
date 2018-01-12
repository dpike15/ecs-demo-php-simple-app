#!/bin/bash

#export WORDPRESS_DB_PASSWORD=`aws ssm get-parameters --names wordpress.db-pass --with-decryption --region $AWS_REGION --query "Parameters[].Value" --output text 2>&1`

# Call the WordPress entry-point script
export WORDPRESS_DB_HOST=hertz-wp-blue.cspo9c1o9nkm.us-east-1.rds.amazonaws.com
export WORDPRESS_DB_NAME=wordpress
export WORDPRESS_DB_PASSWORD=hertzr0cks!
export WORDPRESS_DB_USER=admin
export MYSQL_PORT_3306_TCP=tcp://hertz-wp-blue.cspo9c1o9nkm.us-east-1.rds.amazonaws.com:3306 


WORDPRESS_DB_HOST=$WORDPRESS_DB_HOST \
WORDPRESS_DB_NAME=$WORDPRESS_DB_NAME \
WORDPRESS_DB_USER=$WORDPRESS_DB_USER \
WORDPRESS_DB_PASSWORD=$WORDPRESS_DB_PASSWORD \
MYSQL_PORT_3306_TCP=$MYSQL_PORT_3306_TCP /usr/local/bin/docker-entrypoint.sh "$@"
