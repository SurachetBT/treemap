import mysql.connector
import folium

conn = mysql.connector.connect(host="localhost" , user="root" , password="", database="treemap")
cursor = conn.cursor()
if conn.is_connected():
    print("เชื่อมต่อเเล้ว")
else : 
    print("เชื่อมต่อไม่ได้")

cursor.execute("SELECT tree_id, Latitude, Longitude FROM locations")
locations = cursor.fetchall() 

#create variables
map_filepath = "folium_map.php"
center_med = [7.007148548620727,100.49537658960665]

#create folium map
center_med = folium.Map(location=(center_med),zoom_start=20)

for tree_id, Latitude, Longitude in locations:

    url = f"treeshow.php?tree_id={tree_id}"

    popup_html = f'<a href="{url}" target="_blank">ดูรายละเอียดต้นไม้ {tree_id}</a>'
    folium.Marker(
        location=[Latitude, Longitude],
        popup=folium.Popup(popup_html, max_width=300),
        icon=folium.Icon(color="green", icon="tree") # กำหนดสี Marker
    ).add_to(center_med)

#เก็บลงในพื้นที่ไฟล์
center_med.save(map_filepath)
print("แผนที่ถูกสร้างแล้ว:map_filepath")
# ปิดการเชื่อมต่อฐานข้อมูล
conn.close()


