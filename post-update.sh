#!/usr/bin/env bash

echo "==============="
echo "wp updating"
echo "==============="
rsync -a wp-tmp/ web/
rm -rf wp-tmp

echo "==============="
echo "Ready for development"
echo "==============="
