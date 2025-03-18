import mysql.connector

connector = mysql.connector.connect(host="localhost" , user="root" , password="", database="treemap")

if connector.is_connected():
    print("เชื่อมต่อเเล้ว")
else : 
    print("เชื่อมต่อไม่ได้")

connector.close()

import folium

if __name__ == "__main__":  
    #create variables
    map_filepath = "folium_map.html"
    center_med = [7.007148548620727,100.49537658960665]

    #create folium map
    center_med = folium.Map(location=(center_med),zoom_start=20)

    #เก็บลงในพื้นที่ไฟล์
    center_med.save(map_filepath)


