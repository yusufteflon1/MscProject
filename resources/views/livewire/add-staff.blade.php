
<div>
    <form wire:submit.prevent="submit">
        <div class="columns-2">
            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter name" wire:model="email">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            
            <div class="form-group">
                <label for="exampleInputFirstName">First Name</label>
                <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter first name" wire:model="first_name">
                @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputLastName">Last Name</label>
                <input type="text" class="form-control" id="exampleInputLastName" placeholder="Enter Last name" wire:model="last_name">
                @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPhone">Phone Number</label>
                <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter phone number" wire:model="phone">
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputDepartment">Department</label>
                <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter departmentr" wire:model="department">
                @error('department') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Role</label>
                <select type="" class="form-control" id="exampleInputEmail" value="staff" placeholder="Role" wire:model="role">
                <option value="">--Select Role--</option>
                <option value="staff">Staff</option>
                <option value="manager">Manager</option>
                </select>
                @error('role') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
     <button type="submit" class="btn btn-primary">Add staff</button>
 </form>
 </div>
  
