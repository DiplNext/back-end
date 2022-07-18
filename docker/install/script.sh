#!/bin/sh

# Run supervisor default configuration
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
