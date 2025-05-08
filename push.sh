git st
git add -A
git cm "$1"
git push
echo "🍍make sure to change version numbers"
rsync -avc --delete ./* USERNAME@SITENAME.ssh.wpengine.net:/sites/SITENAME/wp-content/themes/CustomThemeName/
#rsync -avc --delete ./CustomThemeName/scripts/index.js gafest2025@gafest2025.ssh.wpengine.net:/sites/gafest2025/wp-content/themes/CustomThemeName/scripts/index.js