Conditions:
===
Options for `cond.txt` (Changed automatically)
---
- 0
  - Poor
  - No borrowing
- 1
  - Rich
  - No borrowing
- 2
  - Poor
  - Rich income shock after trials
- 3
  - Rich
  - Poor income shock after trials

Options for `canborrow.txt` (Supersedes `cond.txt`):
---
- 0: Borrowing not allowed. Will disable conditions 3 and 4 for `cond.txt`
- 1: Borrowing allowed (still depends on the `cond.txt`)

Shot Specs (`results.txt`):
===
CSV map:
---
- Subject Number (Relates to `demographics.txt`)
- Condition Parameter (Setting in `cond.txt`)
- Level Number
- Number of Berries used in the Level
- Number of Points scored in the Level
- Array (Separated by `#`) of Points scored with each Blueberry
- Array (Separated by `#`) of Time (in milliseconds) spent aiming each Blueberry
- Array (Separated by `#`) of Errors(?) (Seems to never be used)
- Insurance bought? 1 for bought, 0 for not bought
- ID of the insurance for the level, reference to richdat.csv or poordat.csv
- Price
- Displayed probability
- Number of Blueberries (potentially) lost
- Expected value
- Reasonable (1 or 0)
- Does the drought happen? 1 for yes, 0 for no

Post-Quiz (`postquiz_results.txt`):
===
CSV map:
---
- Subject Number (Relates to `demographics.txt`)
Question tree 1 answers, 1 for 50/50, 2 for Sure Payment. Looks like "y.y:x" where y is the question number and x is 1 or 2.
- qt1_1
- qt1_2
- qt1_3
- qt1_4
- qt1_5
- 0 - 10 for first risk-assessment. Looks like "5:x" where x is the answer.
Question tree 2 answers, 1 for 50/50, 2 for Sure Payment
- qt2_1
- qt2_2
- qt2_3
- qt2_4
- qt2_5
- 0 - 10 for second risk-assessment
