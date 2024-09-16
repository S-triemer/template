```bash
if [ -z "$1" ]; then
    echo "Bitte gib einen Ordnernamen als Parameter an."
    exit 1
fi

TARGET_DIR="$1"

git clone git@github.com:S-triemer/template.git "$TARGET_DIR"

if [ $? -ne 0 ]; then
    echo "Fehler beim Klonen des Repos."
    exit 1
fi

sed -i "s/project_name_placeholder/$TARGET_DIR/g" "$TARGET_DIR/Makefile"
sed -i "s/project_name_placeholder/$TARGET_DIR/g" "$TARGET_DIR/docker-compose-cli.yml"
sed -i "s/project_name_placeholder/$TARGET_DIR/g" "$TARGET_DIR/docker-compose.yml"

echo "Prozess erfolgreich abgeschlossen."
```