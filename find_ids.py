import re

content = open(r'c:\Users\Heste\OneDrive\Documents\GitHub\_legacy_backup\library\read\pg45814-h\pg45814-images.html', 'r', encoding='utf-8').read()

# Look for Part headers and their IDs or preceding IDs
# TOC mentions Part 1, Part 2, Part 3.
# Let's search for "PART ONE", "PART TWO", etc.
for part in ["PART ONE", "PART TWO", "PART THREE"]:
    match = re.search(f'>({part}[^<]*)<', content, re.IGNORECASE)
    if match:
        # Find the nearest ID or div
        pos = match.start()
        # Find the nearest <h2> or <div id="..."> before
        print(f"Found {part} at {pos}: {content[pos-100:pos+100]}")

# Common sections
for sec in ["INTRODUCTION", "EXERCISES", "APPENDIX", "INDEX"]:
    match = re.search(f'id="{sec.lower()}"', content, re.IGNORECASE)
    if match:
        print(f"Found {sec} ID at {match.start()}")
    else:
        match = re.search(f'>({sec}[^<]*)<', content, re.IGNORECASE)
        if match:
            print(f"Found {sec} Text at {match.start()}")
