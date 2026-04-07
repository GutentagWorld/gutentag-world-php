#!/usr/bin/env bash
set -euo pipefail

echo "Testing gutentag-world-php..."

php src/GutentagWorld.php 2>&1 | grep -q "Gutentag, World!"

echo "PASS"
