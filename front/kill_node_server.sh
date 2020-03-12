#!/bin/bash
ss -tulp | grep 3000 | cut -d "=" -f2 | cut -d ',' -f1 | xargs kill
