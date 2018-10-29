#!/usr/bin/env bash

echo "==============="
echo "wp installing"
echo "==============="
rsync -a wp-tmp/ web/
rm -rf wp-tmp

echo "==============="
echo "WordMove init running"
echo "==============="
wordmove init

echo "==============="
echo "Ready for development"
echo "==============="
