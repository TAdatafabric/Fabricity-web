import psycopg2
import gspread
from oauth2client.service_account import ServiceAccountCredentials

# PostgreSQL connection details
db_host = 'localhost'
db_port = '5433'
db_name = 'datafabric'
db_user = 'postgres'
db_password = 'Ay0cepatlulu$'

# Google Sheets credentials and API details
google_sheets_credentials = 'ta-data-fabric-d689bfc94931.json'
google_sheets_scope = ['https://www.googleapis.com/auth/spreadsheets']
google_sheets_spreadsheet_id = '1Lii15km8Q91IWQKrhY6I0f92ZR2o4st7'

# Connect to PostgreSQL
try:
    conn = psycopg2.connect(
        host=db_host,
        port=db_port,
        database=db_name,
        user=db_user,
        password=db_password
    )
    cursor = conn.cursor()
    print('Connected to PostgreSQL!')
except (Exception, psycopg2.Error) as error:
    print('Error connecting to PostgreSQL:', error)

# Connect to Google Sheets
try:
    credentials = ServiceAccountCredentials.from_json_keyfile_name(
        google_sheets_credentials,
        google_sheets_scope
    )
    gc = gspread.authorize(credentials)
    sheet = gc.open_by_key(google_sheets_spreadsheet_id).sheet1
    print('Connected to Google Sheets!')
except Exception as error:
    print('Error connecting to Google Sheets:', error)

# Read data from Google Sheets and insert into PostgreSQL
sheet_data = sheet.get_all_records()
for row in sheet_data:
    # Assuming the data columns in Google Sheets are 'column1', 'column2', 'column3'
    column1_value = row['column1']
    column2_value = row['column2']
    column3_value = row['column3']
    
    # Assuming the PostgreSQL table name is 'your_table_name' with columns 'column1', 'column2', 'column3'
    insert_query = "INSERT INTO your_table_name (column1, column2, column3) VALUES (%s, %s, %s)"
    record_to_insert = (column1_value, column2_value, column3_value)
    
    try:
        cursor.execute(insert_query, record_to_insert)
        conn.commit()
        print('Inserted row into PostgreSQL:', record_to_insert)
    except (Exception, psycopg2.Error) as error:
        print('Error inserting row into PostgreSQL:', error)

# Close connections
cursor.close()
conn.close()
