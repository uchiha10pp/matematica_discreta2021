#! /usr/bin/env python
# -*- coding: utf-8 -*-

import sys
from sys import argv

old_r = long(argv[1])
r = long(argv[2])
negative = False
s, old_t = 0, 0
old_s, t = 1, 1

if r < 0:
    r = abs(r)
    negative = True

while r > 0:
    q = old_r / r
    #MCD:
    r, old_r = old_r - q * r, r
    #Coeficiente s:
    s, old_s = old_s - q * s, s
    #Coeficiente t:
    t, old_t = old_t - q * t, t

if negative:
    old_t = old_t * -1
    
print "m.c.d. = ", old_r
print "Bezout s = ", old_s
print "Bezout t = ", old_t