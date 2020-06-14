# !/usr/bin/python
# coding=utf-8

def chickenOrEggs(arrayOfChickenAndEggs):
    arrayOfChickenAndEggs.sort()

    return arrayOfChickenAndEggs

print(chickenOrEggs(['chicken','eggs']))
print(chickenOrEggs(['atody', 'akoho']))
print(chickenOrEggs(['🥚', '🐤']))
