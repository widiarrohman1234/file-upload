# CEK DIREKTORI
DIR="/var/www/html/file-upload"
echo "CEK DIRECTORY $DIR"
if [ -d "$DIR" ]; then
  echo "$DIR TELAH ADA"
else
  echo "$DIR BELUM ADA"
  echo "MEMBUAT DIRECTORY"
  mkdir ${DIR}
  sudo chmod -R 777 "$DIR"
fi