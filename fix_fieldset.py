import os

file_path = r"c:\Users\Heste\OneDrive\Documents\GitHub\_legacy_backup\assessment\grade9.php"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# For multiple choice questions:
content = content.replace(
    '                    </div>\n                </div>\n\n                <fieldset class="question-card"',
    '                    </div>\n                </fieldset>\n\n                <fieldset class="question-card"'
)

# For constructed response questions:
content = content.replace(
    '                    </textarea>\n                </div>\n\n                <fieldset class="question-card"',
    '                    </textarea>\n                </fieldset>\n\n                <fieldset class="question-card"'
)

# For the transition to the submit card
content = content.replace(
    '                    </textarea>\n                </div>\n\n                <div id="submit-card"',
    '                    </textarea>\n                </fieldset>\n\n                <fieldset id="submit-card"'
)
content = content.replace(
    '                    </textarea>\n                </div>\n\n                <fieldset id="submit-card"',
    '                    </textarea>\n                </fieldset>\n\n                <fieldset id="submit-card"'
)
content = content.replace(
    '<div id="submit-card" class="question-card', 
    '<fieldset id="submit-card" class="question-card'
)

# For the end of the submit card
content = content.replace(
    '                    </div>\n                </div>\n\n            </div>\n\n            <div class="mt-10',
    '                    </div>\n                </fieldset>\n\n            </div>\n\n            <div class="mt-10'
)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Fieldsets fixed")
