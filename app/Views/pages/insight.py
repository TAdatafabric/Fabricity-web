import gspread
import psycopg2
from oauth2client.service_account import ServiceAccountCredentials

# Set up credentials for Google Sheets API
scope = ['https://spreadsheets.google.com/feeds', 'https://www.googleapis.com/auth/drive']
credentials = ServiceAccountCredentials.from_json_keyfile_name('credentials.json', scope)  # Replace 'credentials.json' with your credentials file

# Authenticate and open the Google Sheets document
client = gspread.authorize(credentials)
sheet_name = 'data_tes'  # Replace 'Sheet Name' with the name of your Google Sheets document
sheet = client.open(sheet_name).sheet1

# Connect to PostgreSQL
conn = psycopg2.connect(
    database='postgres',
    user='postgres',
    password='Ay0cepatlulu$',
    host='localhost',
    port='5433'
)

# Create a cursor object to execute SQL queries
cursor = conn.cursor()

# Fetch data from Google Sheets
sheet_data = sheet.get_all_values()

# Insert data into PostgreSQL table
for row in sheet_data[1:]:  # Exclude the header row, change the index if needed
    cursor.execute("INSERT INTO your_table (column1, column2) VALUES (%s, %s)", (row[0], row[1]))
    # Replace 'your_table', 'column1', and 'column2' with the appropriate table and column names

# Commit the changes and close the database connection
conn.commit()
conn.close()

print("Data inserted into PostgreSQL successfully!")
