from flask import Flask, request, render_template

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/submit', methods=['POST'])
def submit():
    name = request.form['name']
    email = request.form['email']
    # Process the data as needed
    return f'Name: {name}, Email: {email}'

if __name__ == '__main__':
    app.run(debug=True)
