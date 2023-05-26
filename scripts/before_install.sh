# CEK DIREKTORI
DIR="/home/ubuntu/file-upload"
echo "CEK DIRECTORY $DIR"
if [ -d "$DIR" ]; then
  echo "$DIR TELAH ADA"
else
  echo "$DIR BELUM ADA"
  echo "MEMBUAT DIRECTORY"
  mkdir ${DIR}
  sudo chmod -R 777 "$DIR"
fi